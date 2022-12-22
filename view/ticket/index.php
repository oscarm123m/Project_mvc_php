<div class="card">

  <div class="card-header">
    <a href="?controller=ticketdetail&accion=index" name="" id="" role="button" class="btn btn-warning">Agregar</a>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="font-size: 20px;" scope="col">Id</th>
          <th style="font-size: 20px;" scope="col">Valor_pagado</th>
          <th style="font-size: 20px;" scope="col">Fecha</th>
          <th style="font-size: 20px;" scope="col">Cliente</th>
          <th style="font-size: 20px;" scope="col">Cajero</th>
          <th style="font-size: 20px;" scope="col">Admin</th>
          <th style="font-size: 20px;" scope="col">Direccion</th>
          <th style="font-size: 20px;" scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($tickets as $ticket) { ?>
        <tr>
          <th scope="row" style="font-size: 20px;"><?php echo $ticket->id_ticket; ?></th>
          <td style="font-size: 20px;"><?php echo $ticket->paid_value; ?></td>
          <td style="font-size: 20px;"><?php echo $ticket->ticket_date; ?></td>
          <td style="font-size: 20px;"><?php echo $ticket->fk_id_person_customer; ?></td>
          <td style="font-size: 20px;"><?php echo $ticket->fk_id_person_cashier; ?></td>
          <td style="font-size: 20px;"><?php echo $ticket->fk_id_detail_ticket; ?></td>
          <td style="font-size: 20px;"><?php echo $ticket->fk_id_person_admin; ?></td>
          <td>
            <div>
              <a href="?controller=ticket&accion=delete&id=<?php echo $ticket->id_ticket; ?>" class="btn btn-danger">Borrar</a>
            </div>
          </td>
        </tr>
      <?php }?>
      </tbody>
    </table>
  </div>
  
</div>


