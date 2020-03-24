<?php require APP . 'view/_templates/menu.php'; ?>

<div class="container p-4" id="container-registro-apto">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3">
      &nbsp;
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
      <h1 class="titleregistroapto">Registro Apartamento</h1>
    </div>
  </div>
  <form class="form-horizontal" action="#" method="post" name="form-registro-apto" id="formRegistroApto" autocomplete="off">
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 top">
        <div class="form-group">
          <label for="codigoUrbe" class="color">mi Urbe Código <span class="obligatorio">*</span></label>
        </div>
        <div class="form-group">
          <input type="text" name="codigourbe" id="codigoUrbe" class="form-control" autofocus required placeholder="ABCD-123456">

          <!-- <div class="alert alert-danger ocultar" role="alert" id="avisoformatoemail">
            <i class="fas fa-exclamation-triangle"></i>&nbsp;Formato del correo inválido (example@micorreo.com)
          </div> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
          <label for="unidad" class="color">mi Unidad <span class="obligatorio">*</span></label>
        </div>
        <div class="form-group">
          <select class="form-control" id="unidad" name="miunidad">
            <option value="">---</option>
          </select>

          <!-- <div class="alert alert-danger ocultar" role="alert" id="avisoformatoemail">
            <i class="fas fa-exclamation-triangle"></i>&nbsp;Formato del correo inválido (example@micorreo.com)
          </div> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
          <label for="ciudad" class="color">mi Ciudad <span class="obligatorio">*</span></label>
        </div>
        <div class="form-group">
          <input type="text" name="ciudad" id="miCiudad" class="form-control" required placeholder="Ciudad">

          <!-- <div class="alert alert-danger ocultar" role="alert" id="avisoformatoemail">
            <i class="fas fa-exclamation-triangle"></i>&nbsp;Formato del correo inválido (example@micorreo.com)
          </div> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
          <label for="direccionApto" class="color">mi Dirección <span class="obligatorio">*</span></label>
        </div>
        <div class="form-group">
          <input type="text" name="direccionapto" id="direccionApto" class="form-control" required placeholder="Dirección">

          <!-- <div class="alert alert-danger ocultar" role="alert" id="avisoformatoemail">
            <i class="fas fa-exclamation-triangle"></i>&nbsp;Formato del correo inválido (example@micorreo.com)
          </div> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
          <input type="text" name="miapto" id="apto" class="form-control" required placeholder="mi Apartamento / Placa / Número">

          <!-- <div class="alert alert-danger ocultar" role="alert" id="avisoformatoemail">
            <i class="fas fa-exclamation-triangle"></i>&nbsp;Formato del correo inválido (example@micorreo.com)
          </div> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
          <label for="soy" class="color">Soy <span class="obligatorio">*</span></label>
        </div>
        <div class="form-group">
          <input type="radio" name="propietario" id="soy" class="form-control" required> Propietario

          <!-- <div class="alert alert-danger ocultar" role="alert" id="avisoformatoemail">
            <i class="fas fa-exclamation-triangle"></i>&nbsp;Formato del correo inválido (example@micorreo.com)
          </div> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm12 col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        <input type="submit" name="registro-apto" value="Agregar mi Urbe" id="btn-registro-apto" class="btn-reg-apto">
      </div>
    </div>
  </form>

</div>
