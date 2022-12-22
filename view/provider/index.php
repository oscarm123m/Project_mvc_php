<div class="card">

  <div class="card-header">
    <a href="?controller=provider&accion=create" name="" id="" role="button" class="btn btn-warning">Agregar</a>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="font-size: 20px;" scope="col">Id</th>
          <th style="font-size: 20px;" scope="col">Nombre</th>
          <th style="font-size: 20px;" scope="col">Direccion</th>
          <th style="font-size: 20px;" scope="col">Telefono</th>
          <th style="font-size: 20px;" scope="col">Url</th>
          <th style="font-size: 20px;" scope="col">Nit</th>
          <th style="font-size: 20px;" scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($providers as $provider) { ?>
        <tr>
          <th scope="row" style="font-size: 20px;"><?php echo $provider->id_provider; ?></th>
          <td style="font-size: 20px;"><?php echo $provider->provider_name; ?></td>
          <td style="font-size: 20px;"><?php echo $provider->provider_direction; ?></td>
          <td style="font-size: 20px;"><?php echo $provider->provider_phone; ?></td>
          <td style="font-size: 20px;"><?php echo $provider->provider_url; ?></td>
          <td style="font-size: 20px;"><?php echo $provider->provider_nit; ?></td>
          <td>
            <div>
              <a href="?controller=provider&accion=edit&id=<?php echo $provider->id_provider; ?>" class="btn btn-info">Editar</a>
              <a href="?controller=provider&accion=delete&id=<?php echo $provider->id_provider; ?>" class="btn btn-danger">Borrar</a>
            </div>
          </td>
        </tr>
      <?php }?>
      </tbody>
    </table>
  </div>
  
</div>


