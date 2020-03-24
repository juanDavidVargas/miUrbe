
<div class="menu">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-2 p-4">
      <a href="<?= URL; ?>home/index"><img src="<?= URL; ?>img/casita.jpg" alt="logo" class="logo"></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-1">
      <h1 class="title">Mi Urbe</h1>
      <h2 class="subtitle">Siempre Conectados</h2>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
      <?php if (isset($_SESSION['SESION_INICIADA']) && $_SESSION['SESION_INICIADA'] == TRUE): ?>

        <li class="dropdown user">
  	      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
  	         	 <strong><?= $_SESSION['EMAIL']; ?></strong>&nbsp;
  	        <span class="caret"></span>
  	      </a>
          <ul class="dropdown-menu">
  						<li class="signout">
                <a href="<?= URL; ?>home/cerrarSesion">
                  Cerrar Sesión&nbsp;&nbsp;<i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                </a>
              </li>
          </ul>
        </li>

      <?php else: ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="row margin">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Quienes Somos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="#">Planes</a>
            <a class="nav-item nav-link" href="#">Contáctenos</a>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
