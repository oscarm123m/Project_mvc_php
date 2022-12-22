<div class="card">
  <div class="card-header">
    Agregar impuesto precio producto
  </div>
  <div class="card-body">

    <form action="" method="post">

      <div class="mb-3">
        <label for="price" class="sr-only">Precio:</label>
        <select class="form-control" name="price" id="price">
        <option value="">Seleccione: </option>
        <?php
        $conexionBD=BD::crearIntancia();
        $query = $conexionBD->prepare("SELECT * FROM price_product");
        $query->execute();
        $data = $query->fetchAll();

        foreach ($data as $valores):
        echo '<option value="'.$valores["id_price"].'">'.$valores["sale_price"].'</option>';
        endforeach;
        ?>
        </select>
      </div>

      <div class="mb-3">
        <label for="tax" class="sr-only">Impuesto:</label>
        <select class="form-control" name="tax" id="tax">
        <option value="">Seleccione: </option>
        <?php
        $conexionBD=BD::crearIntancia();
        $query1 = $conexionBD->prepare("SELECT * FROM tax");
        $query1->execute();
        $data1 = $query1->fetchAll();

        foreach ($data1 as $valores1):
        echo '<option value="'.$valores1["id_tax"].'">'.$valores1["tax_name"].'</option>';
        endforeach;
        ?>
        </select>
      </div>

      <input name="" id="" class="btn btn-success" type="submit" value="Guardar">
    </form>

  </div>
</div>