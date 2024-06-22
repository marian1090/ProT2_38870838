<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url(''); ?>">
      <img src="public/assets/img/logo1.png" height="50" alt="Logo-circular" loading="lazy" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(''); ?>"><i class="fa fa-home"></i> Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('nosotros'); ?>"><i class="fa fa-users"></i> Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('acerca'); ?>"><i class="fa fa-handshake"></i> Acerca de</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Acción</a></li>
            <li><a class="dropdown-item" href="#">Otra acción</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Algo más aquí</a></li>
          </ul>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0 mx-auto">
        <div class="input-group">
          <input type="search" id="form1" class="form-control" placeholder="Buscar...">
          <div class="input-group-append">
            <button class="btn-buscar" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('login'); ?>"><i class="fa fa-sign-in-alt"></i> Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('registrarse'); ?>"><i class="fa fa-user-plus"></i> Registrarse</a>
        </li>
      </ul>
    </div>
  </div>
</nav>