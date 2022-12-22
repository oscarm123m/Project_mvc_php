<div class="card">
  <div class="card-header">
    Agregar producto
  </div>
  <div class="card-body">

    <form action="" method="post">

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input required type="text" class="form-control" name="nombre" id="nombre" aria-describedby="" placeholder="nombre del producto" >
      </div>

      <div class="mb-3">
        <label for="stock" class="form-label">stock:</label>
        <input required type="number" class="form-control" name="stock" id="stock" aria-describedby="" placeholder="numero de stock" >
      </div>

      <div class="mb-3">
        <label for="tipoproduct" class="sr-only">Tipo producto:</label>
        <select class="form-control" name="tipoproduct" id="tipoproduct">
        <option value="">Seleccione: </option>
        <?php
        $objeto=new Conexion();
        $conexion=$objeto->Conectar();
        $consulta="SELECT * FROM product_type";
        $sql=$conexion->prepare($consulta);
        $sql->execute();

        //$conexionBD=BD::crearIntancia();
        //$query = $conexionBD->prepare("SELECT * FROM product_type");
        //$query->execute();
        $data = $sql->fetchAll();

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