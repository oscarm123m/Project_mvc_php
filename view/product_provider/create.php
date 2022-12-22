<div class="card">
  <div class="card-header">
    Agregar producto proveedor
  </div>
  <div class="card-body">

    <form action="" method="post">

      <div class="mb-3">
        <label for="proveedor" class="sr-only">Proveedor:</label>
        <select class="form-control" name="proveedor" id="proveedor">
        <option value="">Seleccione: </option>
        <?php
        $objeto=new Conexion();
        $conexion=$objeto->Conectar();
        $consulta="SELECT * FROM provider";
        $sql=$conexion->prepare($consulta);
        $sql->execute();
        //$conexionBD=BD::crearIntancia();
        //$query = $conexionBD->prepare("SELECT * FROM provider");
        //$query->execute();
        $data = $sql->fetchAll();

        foreach ($data as $valores):
        echo '<option value="'.$valores["id_provider"].'">'.$valores["provider_name"].'</option>';
        endforeach;
        ?>
        </select>
      </div>

      <div class="mb-3">
        <label for="codigo" class="form-label">Codigo de barras:</label>
        <input required type="text" class="form-control" name="codigo" id="codigo" aria-describedby="" placeholder="codigo de barras" >
      </div>

      <div class="mb-3">
        <label for="stock" class="form-label">Stock:</label>
        <input required type="number" class="form-control" name="stock" id="stock" aria-describedby="" placeholder="nombre del provedor" >
      </div>

      <div class="mb-3">
        <label for="producto" class="sr-only">Tipo producto:</label>
        <select class="form-control" name="producto" id="producto">
        <option value="">Seleccione: </option>
        <?php
        $objeto1=new Conexion();
        $conexion1=$objeto1->Conectar();
        $consulta1="SELECT * FROM product";
        $sql1=$conexion1->prepare($consulta1);
        $sql1->execute();
        $data1 = $sql1->fetchAll();

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