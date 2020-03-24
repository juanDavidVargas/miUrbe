<?php require APP . 'view/_templates/menu.php'; ?>

<div class="container p-4" id="container-recuperar-password">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <nav aria-label="breadcrumb" id="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= URL; ?>home/index">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= URL; ?>home/inicioSesion">Inicio Sesion</a></li>
        <li class="breadcrumb-item"><a href="<?= URL; ?>home/registro">Registro</a></li>
        <?php if ($_SERVER['REQUEST_URI'] == "/miUrbe/home/recuperarPassword"):?>
        <li class="breadcrumb-item active"><a href="<?= URL; ?>home/recuperarPassword">Recuperar Contraseña</a></li>
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
      <?php if (isset($_SESSION['erroremail']) && isset($_SESSION['errortype']) &&
                $_SESSION['errortype'] == "danger"): ?>

        <div class="alert alert-<?= $_SESSION['errortype'] ?>" role="alert">
          <i class="fas fa-exclamation-triangle"></i>&nbsp;<?= $_SESSION['erroremail']; ?>
        </div>

      <?php session_unset(); ?>
      <?php endif; ?>

      <?php if (isset($_SESSION['message']) && isset($_SESSION['type']) &&
                $_SESSION['type'] == "success"): ?>

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
      <h1 class="titlepass">Recuperar Contraseña</h1>
    </div>
  </div>
  <form class="form-horizontal" action="<?= URL; ?>home/correoRecuperacionPassword" method="post" name="resetpass" id="recuperarpass" autocomplete="off">
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 top">
        <div class="form-group">
          <label for="email" class="color">mi Correo Electrónico</label>
        </div>
        <div class="form-group">
          <input type="email" name="email" id="email" class="form-control" autofocus required onkeyup="formatoEmailUser()">

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
      <div class="col-xs-12 col-sm-12 col-md-4 center">
        <button type="submit" name="enviar" id="enviar">Enviar</button>
      </div>
    </div>
  </form>
</div>
