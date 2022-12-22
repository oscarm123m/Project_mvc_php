<div class="card">
  <div class="card-header">
    Agregar precio producto
  </div>
  <div class="card-body">

    <form action="" method="post">

      <input readonly type="hidden" value="<?php echo $productprovider->id_price_product; ?>" class="form-control" name="id" id="id" aria-describedby="">

      <div class="mb-3">
        <label for="sale" class="form-label">Precio de venta</label>
        <input value="<?php echo $productprovider->sale_price; ?>" required type="number" class="form-control" name="sale" id="sale" aria-describedby="" placeholder="Precio en venta" >
      </div>

      <div class="mb-3">
        <label for="shop" class="form-label">Precio en tienda:</label>
        <input value="<?php echo $productprovider->shop_price; ?>" required type="number" class="form-control" name="shop" id="shop" aria-describedby="" placeholder="Precio en tienda" >
      </div>

      <div class="mb-3">
        <label for="start" class="form-label">Dia inicio:</label>
        <input value="<?php echo $productprovider->start_date; ?>" required type="date" class="form-control" name="start" id="start" aria-describedby="" placeholder="Dia inicio" >
      </div>

      <div class="mb-3">
        <label for="user" class="form-label">Actualizar usuarios:</label>
        <input value="<?php echo $productprovider->user_update; ?>" required type="text" class="form-control" name="user" id="user" aria-describedby="" placeholder="Actualizar usuarios" >
      </div>

      <div class="mb-3">
        <label for="date" class="form-label">Actualizar fecha:</label>
        <input value="<?php echo $productprovider->date_update; ?>" required type="date" class="form-control" name="date" id="date" aria-describedby="" placeholder="Actualizar fecha" >
      </div>

      <div class="mb-3">
        <label for="producto" class="sr-only">Producto proveedor:</label>
        <select value="<?php echo $productprovider->fk_id_product; ?>" class="form-control" name="producto" id="producto">
        <?php
        $objeto=new Conexion();
        $conexion=$objeto->Conectar();
        $consulta="SELECT * FROM provider_product";
        $sql=$conexion->prepare($consulta);
        $sql->execute();
        $data1 = $sql->fetchAll();
        $numero=$productprovider->fk_id_product;

        $conexion=$objeto->Conectar();
        $consulta="SELECT * FROM provider_product WHERE id_provider_product=$numero";
        $sql=$conexion->prepare($consulta);
        $sql->execute();
        $data = $sql->fetchAll();

        foreach ($data as $valores):
        echo '<option value="'.$valores["id_provider_product"].'">'.$valores["bar_code"].'</option>';
        endforeach;

        foreach ($data1 as $valores1):
        echo '<option value="'.$valores1["id_provider_product"].'">'.$valores1["bar_code"].'</option>';
        endforeach;
        ?>
        </select>
      </div>

      <input name="" id="" class="btn btn-success" type="submit" value="Guardar">
    </form>

  </div>
</div>