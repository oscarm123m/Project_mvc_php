<div class="card">
  <div class="card-header">
    Agregar producto proveedor
  </div>
  <div class="card-body">

    <form action="" method="post">

      <input readonly type="hidden" value="<?php echo $productprovider->id_provider_product; ?>" class="form-control" name="id" id="id" aria-describedby="">

      <div class="mb-3">
        <label for="proveedor" class="sr-only">Proveedor:</label>
        <select value="<?php echo $productprovider->fk_id_provider; ?>" class="form-control" name="proveedor" id="proveedor">
        <?php
        $objeto=new Conexion();
        $conexion=$objeto->Conectar();
        $consulta="SELECT * FROM provider";
        $sql=$conexion->prepare($consulta);
        $sql->execute();
        $data = $sql->fetchAll();
        $numero=$productprovider->fk_id_provider;

        $conexion1=$objeto->Conectar();
        $consulta1="SELECT * FROM provider WHERE id_provider=$numero";
        $sql1=$conexion1->prepare($consulta1);
        $sql1->execute();
        $data1 = $sql1->fetchAll();

        foreach ($data1 as $valores1):
        echo '<option value="'.$valores1["id_provider"].'">'.$valores1["provider_name"].'</option>';
        endforeach;

        foreach ($data as $valores):
        echo '<option value="'.$valores["id_provider"].'">'.$valores["provider_name"].'</option>';
        endforeach;
        ?>
        </select>
      </div>

      <div class="mb-3">
        <label for="codigo" class="form-label">Codigo de barras:</label>
        <input value="<?php echo $productprovider->bar_code; ?>" required type="text" class="form-control" name="codigo" id="codigo" aria-describedby="" placeholder="codigo de barras" >
      </div>

      <div class="mb-3">
        <label for="stock" class="form-label">Stock:</label>
        <input value="<?php echo $productprovider->stock; ?>" required type="number" class="form-control" name="stock" id="stock" aria-describedby="" placeholder="nombre del provedor" >
      </div>

      <div class="mb-3">
        <label for="producto" class="sr-only">Tipo producto:</label>
        <select value="<?php echo $productprovider->fk_id_product; ?>" class="form-control" name="producto" id="producto">
        <?php
        $objeto1=new Conexion();
        $conexion1=$objeto1->Conectar();
        $consulta1="SELECT * FROM product";
        $sql1=$conexion1->prepare($consulta1);
        $sql1->execute();
        $data1 = $sql1->fetchAll();
        $numero1=$productprovider->fk_id_product;

        $conexion2=$objeto1->Conectar();
        $consulta2="SELECT * FROM product WHERE id_product=$numero1";
        $sql2=$conexion2->prepare($consulta2);
        $sql2->execute();
        $data2 = $sql2->fetchAll();

        foreach ($data2 as $valores2):
        echo '<option value="'.$valores2["id_product"].'">'.$valores2["product_name"].'</option>';
        endforeach;

        foreach ($data1 as $valores1):
        echo '<option value="'.$valores1["id_product"].'">'.$valores1["product_name"].'</option>';
        endforeach;
        ?>
        </select>
      </div>

      <input name="" id="" class="btn btn-success" type="submit" value="Guardar">
    </form>

  </div>
</div>