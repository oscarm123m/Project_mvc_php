<div class="card">

  <div class="card-header">
    <a href="?controller=productprovider&accion=create" name="" id="" role="button" class="btn btn-warning">Agregar</a>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="font-size: 20px;" scope="col">Id</th>
          <th style="font-size: 20px;" scope="col">Proveedor</th>
          <th style="font-size: 20px;" scope="col">Codigo de barras</th>
          <th style="font-size: 20px;" scope="col">Stock</th>
          <th style="font-size: 20px;" scope="col">Producto</th>
          <th style="font-size: 20px;" scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($productProviders as $productProvider) { ?>
        <tr>
          <th scope="row" style="font-size: 20px;"><?php echo $productProvider->id_provider_product; ?></th>
          <td style="font-size: 20px;"><?php echo $productProvider->fk_id_provider; ?></td>
          <td style="font-size: 20px;"><?php echo $productProvider->bar_code; ?></td>
          <td style="font-size: 20px;"><?php echo $productProvider->stock; ?></td>
          <td style="font-size: 20px;"><?php echo $productProvider->fk_id_product; ?></td>
          <td>
            <div>
              <a href="?controller=productprovider&accion=edit&id=<?php echo $productProvider->id_provider_product; ?>" class="btn btn-info">Editar</a>
              <a href="?controller=productprovider&accion=delete&id=<?php echo $productProvider->id_provider_product; ?>" class="btn btn-danger">Borrar</a>
            </div>
          </td>
        </tr>
      <?php }?>
      </tbody>
    </table>
  </div>
  
</div>


