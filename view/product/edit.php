<div class="card">
  <div class="card-header">
    Agregar producto
  </div>
  <div class="card-body">

    <form action="" method="post">

      <input readonly type="hidden" value="<?php echo $product->id_product; ?>" class="form-control" name="id" id="id" aria-describedby="">

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input value="<?php echo $product->product_name; ?>" required type="text" class="form-control" name="nombre" id="nombre" aria-describedby="" placeholder="nombre del provedor">
      </div>
      <div class="mb-3">
        <label for="stock" class="form-label">Stock:</label>
        <input value="<?php echo $product->product_stock; ?>" required type="number" class="form-control" name="stock" id="stock" aria-describedby="" placeholder="numero stock">
      </div>

      <div class="mb-3">
        <label for="tipoproduct" class="sr-only">Tipo producto:</label>
        <select value="<?php echo $product->fk_id_product_type; ?>" class="form-control" name="tipoproduct" id="tipoproduct">
        <?php
        $objeto=new Conexion();
        $conexion=$objeto->Conectar();
        $consulta="SELECT * FROM product_type";
        $sql=$conexion->prepare($consulta);
        $sql->execute();
        $data = $sql->fetchAll();
        $numero=$product->fk_id_product_type;

        $conexion1=$objeto->Conectar();
        $consulta1="SELECT * FROM product_type WHERE id_product_type=$numero";
        $sql1=$conexion1->prepare($consulta1);
        $sql1->execute();
        $data1 = $sql1->fetchAll();

        foreach ($data1 as $valores1):
        echo '<option value="'.$valores1["id_product_type"].'">'.$valores1["product_type_name"].'</option>';
        endforeach;

        foreach ($data as $valores):
        echo '<option value="'.$valores["id_product_type"].'">'.$valores["product_type_name"].'</option>';
        endforeach;
        ?>
        </select>
      </div>

      <input name="" id="" class="btn btn-success" type="submit" value="Guardar">
    </form>

  </div>
</div>