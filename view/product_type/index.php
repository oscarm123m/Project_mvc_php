<div class="card">

  <div class="card-header">
    <a href="?controller=productype&accion=create" name="" id="" role="button" class="btn btn-warning">Agregar</a>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($productTypes as $productType) { ?>
        <tr>
          <th scope="row"><?php echo $productType->id_product_type; ?></th>
          <td><?php echo $productType->product_type_name; ?></td>
          <td>
            <div>
              <a href="?controller=productype&accion=edit&id=<?php echo $productType->id_product_type; ?>" class="btn btn-info">Editar</a>
              <a href="?controller=productype&accion=delete&id=<?php echo $productType->id_product_type; ?>" class="btn btn-danger">Borrar</a>
            </div>
          </td>
        </tr>
      <?php }?>
      </tbody>
    </table>
  </div>
  
</div>


