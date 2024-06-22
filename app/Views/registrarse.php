<div class="jumbo mt-3">
  <div class="container">
    <h1 class="jumbo-title text-center">Agregar Usuario</h1>
  </div>
</div>
<div class="container mt-1 mb-0 mt-5">
  <div class="card" style="width: 50%;">

    <form>

      <div class="card-body" media="(max-width:768px)">
        <div class="mb-2">
          <label for="exampleFormControlInput1" class="form-label">Nombre</label>
          <input name="nombre" type="text" class="form-control" placeholder="nombre">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
          <input type="text" name="apellido" class="form-control" placeholder="apellido">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input name="email" type="femail" class="form-control" placeholder="correo@algo.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Usuario</label>
          <input type="text" name="usuario" class="form-control" placeholder="usuario">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
          <input name="password" type="password" class="form-control" placeholder="password">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Confirmar Contraseña</label>
          <input name="passconf" type="password" class="form-control" placeholder="Repita su contraseña">
        </div>

        <div class="custom-control custom-checkbox mb-3">
          <input id="customCheck1" type="checkbox" checked class="custom-control-input">
          <label for="customCheck1" class="custom-control-label">Recordar contraseña</label>
        </div>

        <button type="button" class="btn-guardar btn-block">Guardar</button>        
        <button type='reset' class='btn-limpiar btn-block'>Limpiar</button>
        <a href="<?php echo site_url('/') ?>" class='btn btn-primary btn-block'>Volver</a>

      </div>
    </form>
  </div>
</div>