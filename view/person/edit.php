<div class="card">
  <div class="card-header">
    Editar persona
  </div>
  <div class="card-body">

    <form action="" method="post">

      <input readonly type="hidden" value="<?php echo $person->id_person; ?>" class="form-control" name="id" id="id" aria-describedby="">

      <div class="mb-3">
        <label for="dni" class="form-label">Dni:</label>
        <input value="<?php echo $person->person_dni; ?>" required type="text" class="form-control" name="dni" id="dni" aria-describedby="" placeholder="dni de la prersona" >
      </div>

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input value="<?php echo $person->person_name; ?>" required type="text" class="form-control" name="nombre" id="nombre" aria-describedby="" placeholder="Nombre" >
      </div>

      <div class="mb-3">
        <label for="last" class="form-label">Apellido:</label>
        <input value="<?php echo $person->person_last_name; ?>" required type="text" class="form-control" name="last" id="last" aria-describedby="" placeholder="Apellido" >
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">Telefono:</label>
        <input value="<?php echo $person->person_phone; ?>" required type="text" class="form-control" name="phone" id="phone" aria-describedby="" placeholder="Telefono" >
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Direccion:</label>
        <input value="<?php echo $person->person_address; ?>" required type="text" class="form-control" name="address" id="address" aria-describedby="" placeholder="Direccion" >
      </div>

      <div class="mb-3">
        <label for="mail" class="form-label">Correo electronico:</label>
        <input value="<?php echo $person->person_mail; ?>" required type="text" class="form-control" name="mail" id="mail" aria-describedby="" placeholder="Correo electronico" >
      </div>

      <input name="" id="" class="btn btn-success" type="submit" value="Guardar">
    </form>

  </div>
</div>