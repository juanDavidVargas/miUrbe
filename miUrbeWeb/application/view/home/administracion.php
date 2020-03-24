<?php require APP . 'view/_templates/menu.php'; ?>

<div class="container p-4" id="container-login-admin">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <nav aria-label="breadcrumb" id="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= URL; ?>home/index">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= URL; ?>home/inicioSesion">Inicio Sesion</a></li>
        <li class="breadcrumb-item"><a href="<?= URL; ?>home/registro">Registro</a></li>
        <?php if ($_SERVER['REQUEST_URI'] == "/miUrbe/home/loginAdministracion"):?>
        <li class="breadcrumb-item active"><a href="<?= URL; ?>home/loginAdministracion">Administración</a></li>
      <?php else: ?>
      <?php endif; ?>
      </ol>
    </nav>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm12 col-md-12">
      <h1 class="titleadmin">Administración</h1>
    </div>
  </div>
  <form class="form-horizontal" action="#" method="post" autocomplete="off">
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 top">
        <div class="form-group">
          <label for="correoadmin" class="color">mi Correo Electrónico</label>
        </div>
        <div class="form-group">
          <input type="email" name="correoadmin" id="correoadmin" class="form-control" autofocus required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
          <label for="passadmin" class="color">mi Contraseña</label>
        </div>
        <div class="form-group">
          <input type="password" name="passwordadmin" id="passadmin" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 center">
        <button type="submit" name="btn-admin" id="ingresaramin">Ingresar</button>
      </div>
    </div>
  </form>
</div>
