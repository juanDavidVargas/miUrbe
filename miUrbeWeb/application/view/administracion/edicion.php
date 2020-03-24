<?php require APP . 'view/_templates/menu.php'; ?>

<div class="container p-4" id="container-edicion">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3">
      &nbsp;
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
      <h1 class="titlemodificar">mi Urbe Modificar</h1>
    </div>
  <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="col-xs-12 col-sm-12 col-md-4">
      <button type="button" name="edit" id="actualizar">Actualizar</button>
    </div>
  </div>
<br/>
<br/>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-3">
        &nbsp;
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2">
        &nbsp;
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5">
          <img src="<?= URL; ?>img/casita.jpg" alt="perfil" class="fotoperfil">
          <p>
            <label for="fotoUrb" class="upload-foto">Cargar Logo Urbanización</label>
            <input id="fotoUrb" name="fotourb" type="file" accept="image/*"/>
          </p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
          <label for="urbanizacion" class="color">Nombre Urbanización</label>
        </div>
        <div class="form-group">
          <input type="text" name="nombreurb" id="urbanizacion" placeholder="Nombre Urbanización" class="form-control" required autofocus>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
          <label for="direccion" class="color">Dirección</label>
        </div>
        <div class="form-group">
          <input type="text" name="direccion" id="direccion" placeholder="Dirección" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
          <label for="ciudad" class="color">Ciudad</label>
        </div>
        <div class="form-group">
          <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" class="form-control" required>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-1">
        &nbsp;
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
          <label for="creacion" class="color">Fecha Creación</label>
        </div>
        <div class="form-group">
          <input type="text" name="creacion" id="creacion" value="<?= date("d/m/Y"); ?>" class="form-control" readonly="true">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
          <label for="pais" class="color">País</label>
        </div>
        <div class="form-group">
          <input type="text" name="pais" id="pais" placeholder="País" class="form-control" required>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-1">
        &nbsp;
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
          <label for="estado" class="color">Estado</label>
        </div>
        <div class="form-group">
          <input type="text" name="estado" id="estado" placeholder="Estado" class="form-control" readonly="true">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
          <label for="moneda" class="color">Moneda</label>
        </div>
        <div class="form-group">
          <select name="moneda" id="moneda" placeholder="Moneda" class="form-control" required>
            <option value="">---</option>
            <?php if (isset($_GET['id'])): ?>
              <?php foreach ($moneda as $value): ?>
                <option value="<?= $value['SiglasMoneda']; ?>" <?= $value['SiglasMoneda'] == $value['SiglasMoneda'] ? 'selected="selected"' : '' ?>><?= $value['SiglasMoneda'] .  " - " . $value['NombreMoneda']; ?></option>
              <?php endforeach; ?>
            <?php else: ?>
              <option value="<?= $value['SiglasMoneda']; ?>"><?= $value['SiglasMoneda'] .  " - " . $value['NombreMoneda']; ?></option>
            <?php endif; ?>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
          <label for="numaptos" class="color">Número Apartamentos</label>
        </div>
        <div class="form-group">
          <input type="number" name="numaptos" id="numaptos" placeholder="Número Apartamentos" class="form-control" min="1" max="1000000" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
          <label for="correoadmin" class="color">Correo Administrador</label>
        </div>
        <div class="form-group">
          <input type="email" name="correoadmin" id="correoadmin" placeholder="Correo Administrador" class="form-control" required>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-1">
        &nbsp;
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5">
        <button type="button" name="volver" class="btnvolver">
          <a href="<?= URL; ?>administracion/dashboard">
            <i class="fas fa-arrow-alt-circle-left"></i>&nbsp;Volver
          </a>
        </button>
      </div>
    </div>
  </form>
</div>
