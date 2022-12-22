<div class="card">
  <div class="card-header">
    Editar Tipo Producto
  </div>
  <div class="card-body">

    <form action="" method="post">

      <div class="mb-3">
        <input readonly type="hidden" value="<?php echo $productType->id_product_type; ?>" class="form-control" name="id" id="id" aria-describedby="">

        <label for="nombre" class="form-label">Nombre:</label>
        <input required type="text" value="<?php echo $productType->product_type_name; ?>" class="form-control" name="nombre" id="nombre" aria-describedby="" placeholder="nombre del tipo producto" >
      </div>

      <input name="" id="" class="btn btn-success" type="submit" value="Guardar">
      <a href="?controller=productype&accion=index" class="btn btn-outline-danger">cancelar</a>
    </form>

  </div>
</div>