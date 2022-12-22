<div class="card">

  <div class="card-header">
    <a href="?controller=persontype&accion=create" name="" id="" role="button" class="btn btn-warning">Agregar</a>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($personTypes as $personType) { ?>
        <tr>
          <th scope="row"><?php echo $personType->id_person_type; ?></th>
          <td><?php echo $personType->person_type_name; ?></td>
          <td>
            <div>
              <a href="?controller=persontype&accion=edit&id=<?php echo $personType->id_person_type; ?>" class="btn btn-info">Editar</a>
              <a href="?controller=persontype&accion=delete&id=<?php echo $personType->id_person_type; ?>" class="btn btn-danger">Borrar</a>
            </div>
          </td>
        </tr>
      <?php }?>
      </tbody>
    </table>
  </div>
  
</div>


