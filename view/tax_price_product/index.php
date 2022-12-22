<div class="card">

  <div class="card-header">
    <a href="?controller=taxpriceproduct&accion=create" name="" id="" role="button" class="btn btn-warning">Agregar</a>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="font-size: 20px;" scope="col">Id</th>
          <th style="font-size: 20px;" scope="col">Precio</th>
          <th style="font-size: 20px;" scope="col">Impuesto</th>
          <th style="font-size: 20px;" scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($taxpriceproducts as $taxpriceproduct) { ?>
        <tr>
          <th scope="row" style="font-size: 20px;"><?php echo $taxpriceproduct->idTAX_PRICE_PRODUCT; ?></th>
          <td style="font-size: 20px;"><?php echo $taxpriceproduct->fk_id_price; ?></td>
          <td style="font-size: 20px;"><?php echo $taxpriceproduct->fk_id_tax; ?></td>
          <td>
            <div>
              <a href="?controller=taxpriceproduct&accion=edit&id=<?php echo $taxpriceproduct->idTAX_PRICE_PRODUCT; ?>" class="btn btn-info">Editar</a>
              <a href="?controller=taxpriceproduct&accion=delete&id=<?php echo $taxpriceproduct->idTAX_PRICE_PRODUCT; ?>" class="btn btn-danger">Borrar</a>
            </div>
          </td>
        </tr>
      <?php }?>
      </tbody>
    </table>
  </div>
  
</div>


