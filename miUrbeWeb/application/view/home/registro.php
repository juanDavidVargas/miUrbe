<?php require APP . 'view/_templates/menu.php'; ?>

<div class="container p-4" id="container-registro">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <nav aria-label="breadcrumb" id="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= URL; ?>home/index">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= URL; ?>home/inicioSesion">Inicio Sesión</a></li>
        <?php if ($_SERVER['REQUEST_URI'] == "/miUrbe/home/registro"):?>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">Registro</a></li>
      <?php else: ?>
      <?php endif; ?>
      </ol>
    </nav>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3">
          &nbsp;
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
          <?php if (isset($_SESSION['message']) && isset($_SESSION['type']) &&
                    $_SESSION['type'] == "success"): ?>

            <div class="alert alert-<?= $_SESSION['type'] ?>" role="alert">
              <i class="fas fa-check"></i>&nbsp;<?= $_SESSION['message']; ?>
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

          <?php if (isset($_SESSION['errorcampos']) && isset($_SESSION['errortype']) &&
                    $_SESSION['errortype'] == "danger"): ?>

            <div class="alert alert-<?= $_SESSION['errortype'] ?>" role="alert">
              <i class="fas fa-exclamation-triangle"></i>&nbsp;<?= $_SESSION['errorcampos']; ?>
            </div>

          <?php session_unset(); ?>
          <?php endif; ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
          &nbsp;
        </div>
      </div>

      <h1 class="titleregistro">mi Registro</h1>
    </div>
  </div>
  <form class="form-horizontal" action="<?= URL; ?>home/nuevoUsuario" method="post" enctype="multipart/form-data" name="registro" id="formRegistro" autocomplete="off">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 icon">
        <i class="fas fa-user fa-5x"></i>
        <label for="foto" class="upload-button">Cargar mi Imagen</label>
        <input id="foto" name="archivo" type="file" accept="image/*"/>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 top">
        <div class="form-group">
          <label for="nombre" class="color">mi Nombre <span class="obligatorio">*</span></label>
        </div>
        <div class="form-group">
          <input type="text" name="name" id="nombre" class="form-control" autofocus required onkeyup="largoNombre()">

          <div class="alert alert-danger ocultar" role="alert" id="avisolargonombre">
            <i class="fas fa-exclamation-triangle"></i>&nbsp;El nombre debe contener como mínimo 3 caracteres
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
          <label for="email" class="color">mi Correo <span class="obligatorio">*</span></label>
        </div>
        <div class="form-group">
          <input type="email" name="correo" id="email" class="form-control" required onkeyup="ValidarFormatoEmail()">

          <div class="alert alert-danger ocultar" role="alert" id="avisomailformato">
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
          <label for="celular" class="color">mi Número Celular <span class="obligatorio">*</span></label>
        </div>
        <div class="form-group">
          <input type="text" name="cell" id="celular" class="form-control" required onkeyup="largoCelular()">

          <div class="alert alert-danger ocultar" role="alert" id="avisolargocelular">
            <i class="fas fa-exclamation-triangle"></i>&nbsp;El celular debe contener como mínimo 10 caracteres
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
          <label for="contrasenia" class="color">mi Contraseña <span class="obligatorio">*</span></label>
        </div>
        <div class="form-group">
          <input type="password" name="pass" id="contrasenia" class="form-control" required onkeyup="largoPassword()">

          <div class="alert alert-danger ocultar" role="alert" id="avisolargopass">
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
        <div class="form-group">
          <label for="contrasenia2" class="color">mi Contraseña Nuevamente <span class="obligatorio">*</span></label>
        </div>
        <div class="form-group">
          <input type="password" name="pass2" id="contrasenia2" class="form-control" required onkeyup="repetirPassword()">

          <div class="alert alert-danger ocultar" role="alert" id="repetirpass">
            <i class="fas fa-exclamation-triangle"></i>&nbsp;Las contraseñas no coinciden
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 center">
        <button type="submit" name="btnregistro" id="registro">Registro</button>
      </div>
    </div>
  </form>
</div>
