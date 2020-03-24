<?php


class Users extends Controller
{
  private $mdlUsers;

  public function __construct()
  {
    $this->mdlUsers = $this->LoadModel('mdlUsers');
  }

  public function cartelera()
  {
    if (isset($_SESSION['SESION_INICIADA']) && $_SESSION['SESION_INICIADA'] == TRUE)
    {
      require APP . 'view/_templates/header.php';
      require APP . 'view/users/cartelera.php';
      require APP . 'view/_templates/footer.php';
    }
    else
    {
      header('Location:' . URL . 'home/inicioSesion');
      exit;
    }
  }

  public function edicion()
  {
    if (isset($_SESSION['SESION_INICIADA']) && $_SESSION['SESION_INICIADA'] == TRUE)
    {

      $moneda = $this->mdlMoneda->consultarMonedas();

      require APP . 'view/_templates/header.php';
      require APP . 'view/administracion/edicion.php';
      require APP . 'view/_templates/footer.php';
    }
    else
    {
      header('Location:' . URL . 'home/inicioSesion');
      exit;
    }
  }

  public function nuevaUrbanizacion()
  {
    if (isset($_SESSION['SESION_INICIADA']) && $_SESSION['SESION_INICIADA'] == TRUE)
    {
      require APP . 'view/_templates/header.php';
      require APP . 'view/administracion/nuevaUrbanizacion.php';
      require APP . 'view/_templates/footer.php';
    }
    else
    {
      header('Location:' . URL . 'home/inicioSesion');
      exit;
    }
  }

  public function cantidadUrbanizaciones()
  {
    if (isset($_SESSION['SESION_INICIADA']) && $_SESSION['SESION_INICIADA'] == TRUE)
    {
      require APP . 'view/_templates/header.php';
      require APP . 'view/administracion/cantidadUrbanizaciones.php';
      require APP . 'view/_templates/footer.php';
    }
    else
    {
      header('Location:' . URL . 'home/inicioSesion');
      exit;
    }
  }

  public function registroApto()
  {
    if (isset($_SESSION['SESION_INICIADA']) &&
        $_SESSION['SESION_INICIADA'] == TRUE)
    {
      require APP . 'view/_templates/header.php';
      require APP . 'view/users/registroApto.php';
      require APP . 'view/_templates/footer.php';
    }
  }
}
