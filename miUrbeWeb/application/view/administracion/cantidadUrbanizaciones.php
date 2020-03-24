<?php require APP . 'view/_templates/menu.php'; ?>

<div class="container p-4" id="container-cantUrb">
  <form class="form-horizontal" action="#" method="post" name="formcantidadUrb" id="cantUrb" autocomplete="off">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4">
        &nbsp;
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
          <div class="form-group">
            <label for="cantidad">Cantidad Urbanizaciones</label>
          </div>
          <div class="form-group">
            <select class="form-control" name="cantidad">
              <option value="">---</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="mas de 5">Más de 5</option>
            </select>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        &nbsp;
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4">
        &nbsp;
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        <input type="submit" name="continue" value="Continuar" id="continue">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        &nbsp;
      </div>
    </div>
  </form>
</div>
