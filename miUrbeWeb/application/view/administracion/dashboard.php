<?php require APP . 'view/_templates/menu.php'; ?>

<div class="container p-4" id="container-admin">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3">
      &nbsp;
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
      <h1 class="titleadmindashboard">mis Urbe Administraciones</h1>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
      <button type="button" name="new" id="adicionar"><a href="<?= URL; ?>administracion/nuevaUrbanizacion">Adicionar</a></button>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <table class="table table-striped" id="table-data">
        <thead bgcolor="#EFF2F7">
          <tr>
            <th>Id</th>
            <th>Nombre mi Urbe</th>
            <th>Estado</th>
            <th>Creación</th>
            <th># Aptos</th>
            <th>País</th>
            <th>Ciudad</th>
            <th>Moneda</th>
            <th>Editar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>PIEMONTI Apartamentos</td>
            <td>Activo</td>
            <td>01/06/2019</td>
            <td>30</td>
            <td>Colombia</td>
            <td>Medellín</td>
            <td>COP</td>
            <td>
              <a href="#" class="icon-edit"><i class="fas fa-user fa-2x"></i></a>
              <a href="<?= URL; ?>administracion/edicion?id="><i class="far fa-edit fa-2x"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
