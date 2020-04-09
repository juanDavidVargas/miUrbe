<?php


class Administracion extends Controller
{
  private $mdlMoneda;

  public function __construct()
  {
    $this->mdlMoneda = $this->LoadModel('mdlMoneda');
  }

  public function dashboard()
  {
    if (isset($_SESSION['SESION_INICIADA']) && $_SESSION['SESION_INICIADA'] == TRUE) {
      require APP . 'view/_templates/header.php';
      require APP . 'view/administracion/dashboard.php';
      require APP . 'view/_templates/footer.php';
    } else {
      header('Location:' . URL . 'home/inicioSesion');
      exit;
    }
  }

  public function edicion()
  {
    if (isset($_SESSION['SESION_INICIADA']) && $_SESSION['SESION_INICIADA'] == TRUE) {

      // if(isset($_GET['id']) && $_GET['id'] != null)
      // {
      // $id = $_GET['id'];
      // }

      $moneda = $this->mdlMoneda->consultarMonedas();

      require APP . 'view/_templates/header.php';
      require APP . 'view/administracion/edicion.php';
      require APP . 'view/_templates/footer.php';
    } else {
      header('Location:' . URL . 'home/inicioSesion');
      exit;
    }
  }

  public function nuevaUrbanizacion()
  {
    if (isset($_SESSION['SESION_INICIADA']) && $_SESSION['SESION_INICIADA'] == TRUE) {

      $moneda = $this->mdlMoneda->consultarMonedas();

      require APP . 'view/_templates/header.php';
      require APP . 'view/administracion/nuevaUrbanizacion.php';
      require APP . 'view/_templates/footer.php';
    } else {
      header('Location:' . URL . 'home/inicioSesion');
      exit;
    }
  }

  public function cantidadUrbanizaciones()
  {
    if (isset($_SESSION['SESION_INICIADA']) && $_SESSION['SESION_INICIADA'] == TRUE) {
      require APP . 'view/_templates/header.php';
      require APP . 'view/administracion/cantidadUrbanizaciones.php';
      require APP . 'view/_templates/footer.php';
    } else {
      header('Location:' . URL . 'home/inicioSesion');
      exit;
    }
  }

  public function actualizarAptos()
  {
    if (isset($_SESSION['SESION_INICIADA']) && $_SESSION['SESION_INICIADA'] == TRUE) {
      if (isset($_POST['btneditaraptos'])) {
      } else {
        header('Location:' . URL . 'administracion/edicion');
        exit;
      }
    } else {
      header('Location:' . URL . 'home/loginAdministracion');
      exit;
    }
  }

  public function crearNuevaUrbanizacion()
  {
    if (isset($_SESSION['SESION_INICIADA']) && $_SESSION['SESION_INICIADA'] == TRUE) {
      if (isset($_POST['guardarurb'])) {
      } else {
        header('Location:' . URL . 'administracion/nuevaUrbanizacion');
        exit;
      }
    } else {
      header('Location:' . URL . 'home/loginAdministracion');
      exit;
    }
  }
}
