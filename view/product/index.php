<div class="card">

  <div class="card-header">
    <a href="?controller=product&accion=create" name="" id="" role="button" class="btn btn-warning">Agregar</a>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="font-size: 20px;" scope="col">Id</th>
          <th style="font-size: 20px;" scope="col">Nombre</th>
          <th style="font-size: 20px;" scope="col">Stock</th>
          <th style="font-size: 20px;" scope="col">Tipo producto</th>
          <th style="font-size: 20px;" scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product) { ?>
        <tr>
          <th scope="row" style="font-size: 20px;"><?php echo $product->id_product; ?></th>
          <td style="font-size: 20px;"><?php echo $product->product_name; ?></td>
          <td style="font-size: 20px;"><?php echo $product->product_stock; ?></td>
          <td style="font-size: 20px;"><?php echo $product->fk_id_product_type; ?></td>
          <td>
            <div>
              <a href="?controller=product&accion=edit&id=<?php echo $product->id_product; ?>" class="btn btn-info">Editar</a>
              <a href="?controller=product&accion=delete&id=<?php echo $product->id_product; ?>" class="btn btn-danger">Borrar</a>
            </div>
          </td>
        </tr>
      <?php }?>
      </tbody>
    </table>
  </div>
  
</div>


