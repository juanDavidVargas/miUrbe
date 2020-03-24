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
    if (isset($_SESSION['SESION_INICIADA']) && $_SESSION['SESION_INICIADA'] == TRUE)
    {
      require APP . 'view/_templates/header.php';
      require APP . 'view/administracion/dashboard.php';
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
}
