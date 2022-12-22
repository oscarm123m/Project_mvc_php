<div class="card">

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="font-size: 20px;" scope="col">Id</th>
          <th style="font-size: 20px;" scope="col">Producto</th>
          <th style="font-size: 20px;" scope="col">Impuesto</th>
          <th style="font-size: 20px;" scope="col">Monto</th>
          <th style="font-size: 20px;" scope="col">Valor</th>
          <th style="font-size: 20px;" scope="col">Direccion</th>
          <th style="font-size: 20px;" scope="col">Requerido</th>
          <th style="font-size: 20px;" scope="col">Aprovado</th>
          <th style="font-size: 20px;" scope="col">Descripcion</th>
          <th style="font-size: 20px;" scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($detailtickets as $detailticket) { ?>
        <tr>
          <th scope="row" style="font-size: 20px;"><?php echo $detailticket->product_name; ?></th>
          <td style="font-size: 20px;"><?php echo $detailticket->product_name; ?></td>
          <td style="font-size: 20px;"><?php echo $detailticket->tax_name; ?><?php echo $detailticket->tax_value; ?></td>
          <td style="font-size: 20px;"><?php echo $detailticket->amount; ?></td>
          <td style="font-size: 20px;"><?php echo $detailticket->unit_value; ?></td>
          <td style="font-size: 20px;"><?php echo $detailticket->address; ?></td>
          <td style="font-size: 20px;"><?php echo $detailticket->devolution_request; ?></td>
          <td style="font-size: 20px;"><?php echo $detailticket->devolution_approved; ?></td>
          <td style="font-size: 20px;"><?php echo $detailticket->description; ?></td>
          <!--<td>
            <div>
              <a href="?controller=ticket&accion=edit&id=<?php echo $ticket->id_ticket; ?>" class="btn btn-info">Editar</a>
              <a href="?controller=ticket&accion=delete&id=<?php echo $ticket->id_ticket; ?>" class="btn btn-danger">Borrar</a>
            </div>
          </td>-->
        </tr>
      <?php }?>
      </tbody>
    </table>
  </div>
  
</div>
<!------------------------------------------->
<div class="card">
  <div class="card-header">
    Detalle ticket
  </div>
  <div class="card-body">

    <form action="" method="post">

      <div class="mb-3">
        <label for="amount" class="form-label">Monto</label>
        <input required type="number" class="form-control" name="amount" id="amount" aria-describedby="" placeholder="Precio en venta" >
      </div>

      <div class="mb-3">
        <label for="value" class="form-label">Precio unitario</label>
        <input required type="number" class="form-control" name="value" id="value" aria-describedby="" placeholder="Precio en tienda" >
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Direccion</label>
        <input required type="text" class="form-control" name="address" id="address" aria-describedby="" placeholder="Dia inicio" >
      </div>

      <div class="mb-3">
        <label for="request" class="form-label">Devolucion Requerida</label>
        <input required type="date" class="form-control" name="request" id="request" aria-describedby="" placeholder="Actualizar usuarios" >
      </div>

      <div class="mb-3">
        <label for="approved" class="form-label">Devolucion Aprobada</label>
        <input required type="date" class="form-control" name="approved" id="approved" aria-describedby="" placeholder="Actualizar fecha" >
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Decripcion</label>
        <input required type="text" class="form-control" name="description" id="description" aria-describedby="" placeholder="Actualizar fecha" >
      </div>

      <div class="mb-3">
        <label for="producto" class="sr-only">Impuesto</label>
        <select class="form-control" name="producto" id="producto">
        <option value="">Seleccione: </option>
        <?php
        $objeto=new Conexion();
        $conexion=$objeto->Conectar();
        $consulta="SELECT * FROM tax";
        $sql=$conexion->prepare($consulta);
        $sql->execute();
        //$conexionBD=BD::crearIntancia();
        //$query1 = $conexionBD->prepare("SELECT * FROM product_provider");
        //$query1->execute();
        $data1 = $sql->fetchAll();

        foreach ($data1 as $valores1):
        echo '<option value="'.$valores1["id_tax"].'">'.$valores1["tax_name"].'</option>';
        endforeach;
        ?>
        </select>
      </div>

      <!--<div class="mb-3">
        <label for="producto" class="sr-only">Producto</label>
        <select class="form-control" name="producto" id="producto">
        <option value="">Seleccione: </option>
        <?php
        $objeto=new Conexion();
        $conexion=$objeto->Conectar();
        $consulta="SELECT * FROM provider_product";
        $sql=$conexion->prepare($consulta);
        $sql->execute();
        //$conexionBD=BD::crearIntancia();
        //$query1 = $conexionBD->prepare("SELECT * FROM product_provider");
        //$query1->execute();
        $data1 = $sql->fetchAll();

        foreach ($data1 as $valores1):
        echo '<option value="'.$valores1["id_provider_product"].'">'.$valores1["bar_code"].'</option>';
        endforeach;
        ?>
        </select>
      </div>-->

      <input name="" id="" class="btn btn-success" type="submit" value="Guardar">
    </form>

  </div>
</div>