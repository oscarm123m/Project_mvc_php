<div class="card">

  <div class="card-header">
    <a href="?controller=person&accion=create" name="" id="" role="button" class="btn btn-warning">Agregar</a>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="font-size: 20px;" scope="col">Id</th>
          <th style="font-size: 20px;" scope="col">Dni</th>
          <th style="font-size: 20px;" scope="col">Nombre</th>
          <th style="font-size: 20px;" scope="col">Apellido</th>
          <th style="font-size: 20px;" scope="col">Telefono</th>
          <th style="font-size: 20px;" scope="col">Direccion</th>
          <th style="font-size: 20px;" scope="col">Correo</th>
          <th style="font-size: 20px;" scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($persons as $person) { ?>
        <tr>
          <th scope="row" style="font-size: 20px;"><?php echo $person->id_person; ?></th>
          <td style="font-size: 20px;"><?php echo $person->person_dni; ?></td>
          <td style="font-size: 20px;"><?php echo $person->person_name; ?></td>
          <td style="font-size: 20px;"><?php echo $person->person_last_name; ?></td>
          <td style="font-size: 20px;"><?php echo $person->person_phone; ?></td>
          <td style="font-size: 20px;"><?php echo $person->person_address; ?></td>
          <td style="font-size: 20px;"><?php echo $person->person_mail; ?></td>
          <td>
            <div>
              <a href="?controller=person&accion=edit&id=<?php echo $person->id_person; ?>" class="btn btn-info">Editar</a>
              <a href="?controller=person&accion=delete&id=<?php echo $person->id_person; ?>" class="btn btn-danger">Borrar</a>
            </div>
          </td>
        </tr>
      <?php }?>
      </tbody>
    </table>
  </div>
  
</div>


