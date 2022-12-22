<div class="card">

  <div class="card-header">
    <a href="?controller=priceproduct&accion=create" name="" id="" role="button" class="btn btn-warning">Agregar</a>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="font-size: 20px;" scope="col">Id</th>
          <th style="font-size: 20px;" scope="col">Precio_venta</th>
          <th style="font-size: 20px;" scope="col">Precio_tienda</th>
          <th style="font-size: 20px;" scope="col">Fecha_inicio</th>
          <th style="font-size: 20px;" scope="col">Act_usuario</th>
          <th style="font-size: 20px;" scope="col">Act_fecha</th>
          <th style="font-size: 20px;" scope="col">Producto_provee</th>
          <th style="font-size: 20px;" scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($priceproducts as $priceproduct) { ?>
        <tr>
          <th scope="row" style="font-size: 20px;"><?php echo $priceproduct->id_price_product; ?></th>
          <td style="font-size: 20px;"><?php echo $priceproduct->sale_price; ?></td>
          <td style="font-size: 20px;"><?php echo $priceproduct->shop_price; ?></td>
          <td style="font-size: 20px;"><?php echo $priceproduct->start_date; ?></td>
          <td style="font-size: 20px;"><?php echo $priceproduct->user_update; ?></td>
          <td style="font-size: 20px;"><?php echo $priceproduct->date_update; ?></td>
          <td style="font-size: 20px;"><?php echo $priceproduct->fk_id_product; ?></td>
          <td>
            <div>
              <a href="?controller=priceproduct&accion=edit&id=<?php echo $priceproduct->id_price_product; ?>" class="btn btn-info">Editar</a>
              <a href="?controller=priceproduct&accion=delete&id=<?php echo $priceproduct->id_price_product; ?>" class="btn btn-danger">Borrar</a>
            </div>
          </td>
        </tr>
      <?php }?>
      </tbody>
    </table>
  </div>
  
</div>


