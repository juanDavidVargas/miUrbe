<?php require APP . 'view/_templates/menu.php'; ?>

<div class="container p-4" id="container-iniciosesion">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <nav aria-label="breadcrumb" id="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= URL; ?>home/index">Home</a></li>
        <?php if ($_SERVER['REQUEST_URI'] == "/miUrbe/home/inicioSesion"):?>
        <li class="breadcrumb-item active"><a href="<?= URL; ?>home/inicioSesion">Inicio Sesión</a></li>
      <?php else: ?>
      <?php endif; ?>
      </ol>
    </nav>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3">
      &nbsp;
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
      <?php if (isset($_SESSION['errorcampos']) && isset($_SESSION['errortype']) &&
                $_SESSION['errortype'] == "danger"): ?>

        <div class="alert alert-<?= $_SESSION['errortype'] ?>" role="alert">
          <i class="fas fa-exclamation-triangle"></i>&nbsp;<?= $_SESSION['errorcampos']; ?>
        </div>

      <?php session_unset(); ?>
      <?php endif; ?>

      <?php if (isset($_SESSION['message']) && isset($_SESSION['type']) &&
                $_SESSION['type'] == "danger"): ?>

        <div class="alert alert-<?= $_SESSION['type'] ?>" role="alert">
          <i class="fas fa-exclamation-triangle"></i>&nbsp;<?= $_SESSION['message']; ?>
        </div>

      <?php session_unset(); ?>
      <?php endif; ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3">
      &nbsp;
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm12 col-md-12">
      <h1 class="titleingresar">Ingresar</h1>
    </div>
  </div>
  <form class="form-horizontal" action="<?= URL; ?>home/validarInicioSesion" method="post" name="login" id="inicioSesion" autocomplete="off">
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 top">
        <div class="form-group">
          <label for="correo" class="color">mi Correo Electrónico</label>
        </div>
        <div class="form-group">
          <input type="email" name="correo" id="correo" class="form-control" autofocus required onkeyup="formatoEmail()">

          <div class="alert alert-danger ocultar" role="alert" id="avisoformatoemail">
            <i class="fas fa-exclamation-triangle"></i>&nbsp;Formato del correo inválido (example@micorreo.com)
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
          <label for="pass" class="color">mi Contraseña</label>
        </div>
        <div class="form-group">
          <input type="password" name="pass" id="pass" class="form-control" required onkeyup="longitudPassword()">

          <div class="alert alert-danger ocultar" role="alert" id="longitudPass">
            <i class="fas fa-exclamation-triangle"></i>&nbsp;La contraseña debe contener como mínimo 8 caracteres
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        <p class="right">
          <a href="<?= URL; ?>home/recuperarPassword">Recuperar mi contraseña</a>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 center">
        <button type="submit" name="iniciar" id="iniciar">Ingresar</button>
      </div>
    </div>
  </form>
  <div class="row">
    <div class="col-xs-12 col-sm12 col-md-4">
      <p>&nbsp;</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
      <p class="center">
        <a href="<?= URL; ?>home/registro">Registrar. Quiero crear mi cuenta</a>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2">
      <p>&nbsp;</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2">
      <a href="#"><img src="<?= URL; ?>img/logo-facebook.jpg" alt="logo facebook"></a>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2">
      <a href="#"><img src="<?= URL; ?>img/logo-google.jpg" alt="logo google"></a>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2">
      <a href="#"><img src="<?= URL; ?>img/logo-instagram.jpg" alt="logo instagram"></a>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2">
      <a href="#"><img src="<?= URL; ?>img/logo-twitter.jpg" alt="logo twitter"></a>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2">
      <p>&nbsp;</p>
    </div>
  </div>
</div>
