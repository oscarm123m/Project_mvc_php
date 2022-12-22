<div class="card">
  <div class="card-header">
      Factura
  </div>
    <form action="?controller=ticketdetail&accion=create" method="post">
      <div class="container">
        <div class="row">

          <div class="col-md-3 portfolio-item">
            <label for="value" class="form-label">valor monto</label>
            <input required type="number" class="form-control" name="value" id="value" aria-describedby="" placeholder="Precio en venta" >
          </div>

          <div class="col-md-3 portfolio-item">
            <label for="date" class="form-label">Fecha</label>
            <input required type="date" class="form-control" name="date" id="date" aria-describedby="" placeholder="Precio en tienda" >
          </div>

          <div class="col-md-3">
            <label for="costomer" class="sr-only">Cliente</label>
            <select class="form-control" name="costomer" id="costomer">
            <option value="">Seleccione: </option>
            <?php
            $objeto=new Conexion();
            $conexion=$objeto->Conectar();
            $consulta="SELECT * FROM person";
            $sql=$conexion->prepare($consulta);
            $sql->execute();
            //$conexionBD=BD::crearIntancia();
            //$query1 = $conexionBD->prepare("SELECT * FROM product_provider");
            //$query1->execute();
            $data1 = $sql->fetchAll();

            foreach ($data1 as $valores1):
            echo '<option value="'.$valores1["id_person"].'">'.$valores1["person_name"].'  '.$valores1["person_last_name"].'</option>';
            endforeach;
            ?>
            </select>
          </div>  

        </div>
          <input name="" id="" class="btn btn-warning" type="submit" value="Generar">
          <!--<a href="?controller=ticket&accion=edit&id=1; ?>" class="btn btn-info">Editar</a>-->
      </div>
    </form>
</div>

<!----------------------------------------------------->
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
          <th scope="row" style="font-size: 20px;"><?php echo $detailticket->id_detail_ticket; ?></th>
          <td style="font-size: 20px;"><?php echo $detailticket->id_person; ?></td>
          <td style="font-size: 20px;"><?php echo $detailticket->tax_name; ?> / <?php echo $detailticket->tax_value; ?></td>
          <td style="font-size: 20px;"><?php echo $detailticket->amount; ?></td>
          <td style="font-size: 20px;"><?php echo $detailticket->unit_value; ?></td>
          <td style="font-size: 20px;"><?php echo $detailticket->address; ?></td>
          <td style="font-size: 20px;"><?php echo $detailticket->devolution_request; ?></td>
          <td style="font-size: 20px;"><?php echo $detailticket->devolution_approved; ?></td>
          <td style="font-size: 20px;"><?php echo $detailticket->description; ?></td>
          <td>
            <div>
              <!--<a href="?controller=ticket&accion=edit&id=<?php echo $ticket->id_ticket; ?>" class="btn btn-info">Editar</a><-->
              <a href="?controller=ticketdetail&accion=delete&id=<?php echo $detailticket->id_detail_ticket; ?>" class="btn btn-danger">Borrar</a>
            </div>
          </td>
        </tr>
      <?php }?>
      </tbody>
    </table>
  </div>
  
</div>
<!------------------------------------------->
<div class="card">
  <div class="card-header">
    Detalle Factura
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
        <label for="tax" class="sr-only">Impuesto</label>
        <select class="form-control" name="tax" id="tax">
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
        echo '<option value="'.$valores1["id_tax"].'">'.$valores1["tax_name"].' / '.$valores1["tax_value"].'</option>';
        endforeach;
        ?>
        </select>
      </div>

      <div class="mb-3">
        <label for="product" class="sr-only">Producto</label>
        <select class="form-control" name="product" id="product">
        <option value="">Seleccione: </option>
        <?php
        $objeto1=new Conexion();
        $conexion1=$objeto1->Conectar();
        $consulta1="SELECT pp.id_price_product as price, p.product_name as name FROM product p, price_product pp WHERE pp.fk_id_product=p.id_product";
        $sql1=$conexion1->prepare($consulta1);
        $sql1->execute();
        //$conexionBD=BD::crearIntancia();
        //$query1 = $conexionBD->prepare("SELECT * FROM product_provider");
        //$query1->execute();
        $data = $sql1->fetchAll();

        foreach ($data as $valores):
        echo '<option value="'.$valores["price"].'">'.$valores["name"].'</option>';
        endforeach;
        ?>
        </select>
      </div>

      <input name="" id="" class="btn btn-success" type="submit" value="Guardar">
    </form>

  </div>
</div>