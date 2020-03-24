<?php require APP . 'view/_templates/menu.php'; ?>

<div class="container p-4" id="container-reestablecer-password">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3">
      &nbsp;
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
      <?php if (isset($_SESSION['errorclaves']) && isset($_SESSION['errortype']) &&
                $_SESSION['errortype'] == "danger"): ?>

        <div class="alert alert-<?= $_SESSION['errortype'] ?>" role="alert">
          <i class="fas fa-exclamation-triangle"></i>&nbsp;<?= $_SESSION['errorclaves']; ?>
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
      <h1 class="titleresetpass">Reestablecer mi Contraseña</h1>
    </div>
  </div>
  <form class="form-horizontal" action="<?= URL; ?>home/actualizarClave" method="post" name="actualizarclave" id="formactualizarClave" autocomplete="off">
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 top">
        <div class="form-group">
          <label for="newpass" class="color">mi Nueva Clave</label>
        </div>
        <div class="form-group">
          <input type="password" name="newpassword" id="newpass" class="form-control" autofocus required onkeyup="longitudClave()">

          <div class="alert alert-danger ocultar" role="alert" id="avisolargoClave">
            <i class="fas fa-exclamation-triangle"></i>&nbsp;La clave debe contener como mínimo 8 caracteres
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 top">
        <div class="form-group">
          <label for="repeatnewpass" class="color">Repetir mi Clave</label>
        </div>
        <div class="form-group">
          <input type="password" name="repeatNewPassword" id="repeatnewpass" class="form-control" required onkeyup="repetirClave()">

          <div class="alert alert-danger ocultar" role="alert" id="avisoclavesiguales">
            <i class="fas fa-exclamation-triangle"></i>&nbsp;Las claves no son iguales
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 center">
        <button type="submit" name="actualizarclave" id="actualizarClave">Actualizar</button>
      </div>
    </div>
  </form>
</div>
