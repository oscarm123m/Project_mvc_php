<div class="card">
  <div class="card-header">
    Editar impuesto
  </div>
  <div class="card-body">

    <form action="" method="post">

      <input readonly type="hidden" value="<?php echo $tax->id_tax; ?>" class="form-control" name="id" id="id" aria-describedby="">

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input value="<?php echo $tax->tax_name; ?>" required type="text" class="form-control" name="nombre" id="nombre" aria-describedby="" placeholder="nombre del provedor" >
      </div>

      <div class="mb-3">
        <label for="valor" class="form-label">Valor:</label>
        <input value="<?php echo $tax->tax_value; ?>" required type="number" class="form-control" name="valor" id="valor" aria-describedby="" placeholder="valor" >
      </div>

      <div class="mb-3">
        <label for="fecha" class="form-label">Fecha:</label>
        <input value="<?php echo $tax->creation_date; ?>" required type="date" class="form-control" name="fecha" id="fecha" aria-describedby="" placeholder="fecha" >
      </div>

      <input name="" id="" class="btn btn-success" type="submit" value="Guardar">
      <a href="?controller=tax&accion=index" class="btn btn-outline-danger">cancelar</a>
    </form>

  </div>
</div>