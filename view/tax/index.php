<div class="card">

  <div class="card-header">
    <a href="?controller=tax&accion=create" name="" id="" role="button" class="btn btn-warning">Agregar</a>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="font-size: 20px;" scope="col">Id</th>
          <th style="font-size: 20px;" scope="col">Nombre</th>
          <th style="font-size: 20px;" scope="col">Valor</th>
          <th style="font-size: 20px;" scope="col">Fecha</th>
          <th style="font-size: 20px;" scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($taxs as $tax) { ?>
        <tr>
          <th scope="row" style="font-size: 20px;"><?php echo $tax->id_tax; ?></th>
          <td style="font-size: 20px;"><?php echo $tax->tax_name; ?></td>
          <td style="font-size: 20px;"><?php echo $tax->tax_value; ?></td>
          <td style="font-size: 20px;"><?php echo $tax->creation_date; ?></td>
          <td>
            <div>
              <a href="?controller=tax&accion=edit&id=<?php echo $tax->id_tax; ?>" class="btn btn-info">Editar</a>
              <a href="?controller=tax&accion=delete&id=<?php echo $tax->id_tax; ?>" class="btn btn-danger">Borrar</a>
            </div>
          </td>
        </tr>
      <?php }?>
      </tbody>
    </table>
  </div>
  
</div>


