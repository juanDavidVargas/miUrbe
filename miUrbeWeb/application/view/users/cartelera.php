<?php require APP . 'view/_templates/menu.php'; ?>

<div class="container p-4" id="container-cartelera">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3">
      &nbsp;
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
      <h1 class="titlecartelera">Cartelera</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="row">
        <?php for ($i=0; $i <= 1; $i++): ?>
        <div class="col-xs-12 col-sm-12 col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-5">
                  <h4 class="card-title">Fumigación esta Semana</h4>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-2">
                  <p>&nbsp;</p>
                </div>
                <div class="col-sm-5 col-xs-5 col-md-5 text-right card-date">
                  <h5>11/06/2019</h5>
                </div>
              </div>
              <h6 class="card-subtitle">Administrador mi Urbe</h6>
              <p class="card-text">
                Se tendrá Fumigación toda esta semana, en el horario de 8 am a 12 pm.
                Por favor reservar su cita en la administración.
              </p>
              <a href="#" class="btn btn-success">Aceptar</a>
            </div>
          </div>
        </div>
      <?php endfor; ?>
      </div>
    </div>
  </div>
  <div class="row justify-content-md-center">

    <div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-1">
      <a href="#" class="btn-footer-cartelera">Administración</a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-1">
      <a href="#" class="btn-footer-cartelera">Publicidad</a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-1">
      <a href="#" class="btn-footer-cartelera">Residentes</a>
    </div>

  </div>
</div>
