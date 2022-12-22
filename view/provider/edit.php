<div class="card">
  <div class="card-header">
    Agregar proveedor
  </div>
  <div class="card-body">

    <form action="" method="post">

      <input readonly type="hidden" value="<?php echo $provider->id_provider; ?>" class="form-control" name="id" id="id" aria-describedby="">

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input value="<?php echo $provider->provider_name; ?>" required type="text" class="form-control"  name="nombre" id="nombre" aria-describedby="" placeholder="nombre del provedor" >
      </div>

      <div class="mb-3">
        <label for="nit" class="form-label">Nit:</label>
        <input value="<?php echo $provider->provider_nit; ?>" required type="text" class="form-control" name="nit" id="nit" aria-describedby="" placeholder="nit" >
      </div>

      <div class="mb-3">
        <label for="url" class="form-label">Url:</label>
        <input value="<?php echo $provider->provider_url; ?>" required type="text" class="form-control" name="url" id="url" aria-describedby="" placeholder="url" >
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Direccion:</label>
        <input value="<?php echo $provider->provider_direction; ?>" required type="text" class="form-control" name="address" id="address" aria-describedby="" placeholder="Correo electronico" >
      </div>

      <div class="mb-3">
        <label for="number" class="form-label">Telefono:</label>
        <input value="<?php echo $provider->provider_phone; ?>" required type="text" class="form-control" name="number" id="number" aria-describedby="" placeholder="Numero de telefono" >
      </div>

      <input name="" id="" class="btn btn-success" type="submit" value="Guardar">
      <a href="?controller=provider&accion=index" class="btn btn-outline-danger">cancelar</a>
    </form>

  </div>
</div>