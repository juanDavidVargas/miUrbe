<?php

class Home extends Controller
{
  private $mdlLogin;
  private $mdlUsers;

  public function __construct()
  {
    $this->mdlLogin = $this->LoadModel('mdlLogin');
    $this->mdlUsers = $this->LoadModel('mdlUsers');
  }

  private function Encrypt($string)
  {
    $sizeof = strlen($string) - 1;
    $result = '';
    for ($x = $sizeof; $x >= 0; $x--)
    {
      $result .= $string[$x];
    }
    $result = sha1($result);
    return $result;
  }

  public function problem()
  {
    echo "Página no encontrada";
  }

  public function index()
  {
    require APP . 'view/_templates/header.php';
    require APP . 'view/home/index.php';
    require APP . 'view/_templates/footer.php';
  }

  public function inicioSesion()
  {
    require APP . 'view/_templates/header.php';
    require APP . 'view/home/inicioSesion.php';
    require APP . 'view/_templates/footer.php';
  }

  public function validarInicioSesion()
  {
    if (isset($_POST['iniciar']) && isset($_POST['correo']) && isset($_POST['pass']))
    {
      $correo = $_POST['correo'];
      $pass = $_POST['pass'];

      if (strstr($correo, "@") && strstr($correo, ".") &&
          strlen($pass) >= 8)
      {
        $this->mdlLogin->__SET("Correo", $correo);
        $this->mdlLogin->__SET("Clave", $this->Encrypt($pass));
        $user = $this->mdlLogin->consultarDatosUsuario();

        if(count($user) != 0)
        {
          foreach ($user as $value)
          {
            if ($value['Correo'] == $correo &&
            $value['Clave'] == $this->Encrypt($pass))
            {
              $_SESSION['SESION_INICIADA'] = TRUE;
              $_SESSION['USUARIO_ID'] = $value['idUsuario'];
              $_SESSION['EMAIL'] = $value['Correo'];

              header("Location: " . URL . "users/cartelera");
              exit;
            }
          }
        }
        else
        {
          $_SESSION['type'] = "danger";
          $_SESSION['message'] = "Las credenciales ingresadas son incorrectas";
          header("Location: " . URL . "home/inicioSesion");
          exit;
        }
      }
      else
      {
        $_SESSION['errortype'] = "danger";
        $_SESSION['errorcampos'] = "Los valores ingresados no cumplen con los parámetros,
                                    por favor vuelva a intentar.";
        header("Location: " . URL . "home/inicioSesion");
        exit;
      }
    }
    else
    {
      header("Location: " . URL . "home/inicioSesion");
      exit;
    }
  }

  public function cerrarSesion()
  {
    unset(
          $_SESSION['SESION_INICIADA'],
          $_SESSION['USUARIO_ID'],
          $_SESSION['EMAIL']
        );

    session_unset();
    session_destroy();

    header('Location:' . URL . 'home/inicioSesion');
    exit;
  }

  public function registro()
  {
    require APP . 'view/_templates/header.php';
    require APP . 'view/home/registro.php';
    require APP . 'view/_templates/footer.php';
  }

  public function nuevoUsuario()
  {
    if (isset($_POST['btnregistro']))
    {
      // Acá capturo las variables enviadas desde el formulario
      $nombre = $_POST['name'];
      $correo = $_POST['correo'];
      $pass = $_POST['pass'];
      $pass2 = $_POST['pass2'];
      $celular = $_POST['cell'];
      $imagen = $_FILES['archivo']['name'];

      if (strlen($nombre) >= 3 && strstr($correo, "@") && strstr($correo, ".") &&
          strlen($pass) >= 8 && strlen($celular) >= 10 && ($pass === $pass2))
      {
        // Acá se esta mandando le valor de las variables al modelo
        $this->mdlLogin->__SET("NombreUsuario", $nombre);
        $this->mdlLogin->__SET("Correo", $correo);
        $this->mdlLogin->__SET("Clave", $this->Encrypt($pass));
        $this->mdlLogin->__SET('NumeroCelular', $celular);
        $this->mdlLogin->__SET('IdTipoAutenticacion', 1);//Mandamos el 1 como tipo de autenticación
                                                        //ya que fue un usuario creado desde el formulario de registro.
        $this->mdlLogin->__SET('Imagen', $imagen);
        $this->mdlLogin->__SET('FechaModificacion', "");
        $user = $this->mdlLogin->insertarNuevoUsuario();

        if($user)
        {
          $_SESSION['type'] = "success";
          $_SESSION['message'] = "Datos guardados correctamente.";
          header("Location: " . URL . "home/registro");
          exit;
        }
        else
        {
          $_SESSION['type'] = "danger";
          $_SESSION['message'] = "Error insertando los datos, vuelve a intentarlo.";
          header("Location: " . URL . "home/registro");
          exit;
        }
      }
      else
      {
        $_SESSION['errortype'] = "danger";
        $_SESSION['errorcampos'] = "Los valores ingresados no cumplen con los parámetros,
                                    por favor vuelva a intentar";
        header("Location: " . URL . "home/registro");
        exit;
      }
    }
    else
    {
      header("Location: " . URL . "home/registro");
      exit;
    }
  }

  public function loginAdministracion()
  {
    require APP . 'view/_templates/header.php';
    require APP . 'view/home/administracion.php';
    require APP . 'view/_templates/footer.php';
  }

  public function recuperarPassword()
  {
    require APP . 'view/_templates/header.php';
    require APP . 'view/home/recuperarPassword.php';
    require APP . 'view/_templates/footer.php';
  }

  public function correoRecuperacionPassword()
  {
    if (isset($_POST['enviar']) && isset($_POST['email']))
    {
      $this->mdlUsers->__SET('Correo', $_POST['email']);
      $user = $this->mdlUsers->consultarEmailUser();

        if (!empty($user[0]['Correo']) && count($user[0]['Correo']) >= 1)
        {
          // $destinatario = "jvargasp@maaji.co";
          $destinatario = $user[0]['Correo'];

          //Titulo
          $asunto = "mi URBE RECUPERACIÓN DE CONTRASEÑA";

          //Cuerpo
          $cuerpo = "";
          $cuerpo = '
          <!DOCTYPE html>
          <head>
          <title>RECUPERACIÓN DE CONTRASEÑA NO REPLY</title>
          </head>
          <body>
          <h1>Hola!';
          $cuerpo .=  $user[0]['Correo'] . '</h1>';
          $cuerpo .= '<p>Para poder reestablecer su contraseña por favor ingresar al siguiente ';
          $cuerpo .= '<a href="' . URL .'home/reestablecerClave?correo="' . $user[0]['Correo'] . '"&verificado="' . sha1(md5(true)) . '">enlace</a>';
          $cuerpo .= '</p></body></html>';

          //cabecera
          $headers = "MIME-Version: 1.0\r\n";
          $headers .= "Content-type: text/html; charset=utf-8\r\n";

          //dirección del remitente
          $headers .= "From: mi Urbe <juandeveloper1990@gmail.com>\r\n";

          //Enviamos el mensaje a tu dirección de email
          mail($destinatario,$asunto,$cuerpo,$headers);

          $_SESSION['type'] = "success";
          $_SESSION['message'] = "Por favor revisa el correo para continuar con el reestablecimiento de tu clave";
          header("Location: " . URL . "home/recuperarPassword");
          exit;
        }

        if (empty($user[0]['Correo']))
        {
          $_SESSION['errortype'] = "danger";
          $_SESSION['erroremail'] = "No se encontrarón registros del correo ingresado";
          header("Location: " . URL . "home/recuperarPassword");
          exit;
        }
    }
    else
    {
      header("Location: " . URL . "home/recuperarPassword");
      exit;
    }
  }

  public function reestablecerClave()
  {
    //0937afa17f4dc08f3c0e5dc908158370ce64df86 --> true encriptado
    if (isset($_GET['verificado']) && $_GET['verificado'] == sha1(md5(TRUE)))
    {
      require APP . 'view/_templates/header.php';
      require APP . 'view/home/reestablecerClave.php';
      require APP . 'view/_templates/footer.php';
    }

    else
    {
      header("Location: " . URL . "home/recuperarPassword");
      exit;
    }
  }

  public function actualizarClave()
  {
    if (isset($_POST['actualizarclave']) && isset($_POST['newpassword']))
    {
      $pass = $_POST['newpassword'];
      $repeatPass = $_POST['repeatNewPassword'];
      $correo = "juan@gmail.com";

      if ($pass === $repeatPass)
      {
        $this->mdlUsers->__SET('Correo', $correo);
        $this->mdlUsers->__SET('Clave', $this->Encrypt($pass));
        $this->mdlUsers->actualizarClave();

        $_SESSION['type'] = "success";
        $_SESSION['message'] = "La clave ha sido actualizada correctamente, ya puedes <a href='" . URL ."home/inicioSesion' style='text-decoration: none;'>Ingresar</a>";
        header("Location: " . URL . "home/reestablecerClave?verificado=" . sha1(md5(TRUE)));
        exit;
      }

      else
      {
        $_SESSION['errortype'] = "danger";
        $_SESSION['errorclaves'] = "Las claves ingresadas no son iguales";
        header("Location: " . URL . "home/reestablecerClave?verificado=" . sha1(md5(TRUE)));
        exit;
      }

    }

    else
    {
      header("Location: " . URL . "home/recuperarPassword");
      exit;
    }

  }

}
