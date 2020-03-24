
<?php require APP . 'view/_templates/menu.php'; ?>

<div class="container p-4">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4">
      <p>&nbsp;</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
      <form class="form-horizontal" action="<?= URL; ?>home/inicioSesion" method="post" autocomplete="off">
        <button type="submit" name="btningresar" class="btningresar">
          Ingresar
        </button>
      </form>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
      <p>&nbsp;</p>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <img src="<?= URL; ?>img/urbe.jpg" alt="urbe" class="image">
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      &nbsp;
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <p class="description">
        mi Urbe es una solución integrada donde los habitantes de una comunidad
        estaran conectados con la administración de su vivienda...
      </p>
    </div>
  </div>
</div>
