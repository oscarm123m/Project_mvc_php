<!doctype html>
<html lang="en">
  <head>
    <title>Hello,</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<!-----------------nav--------------->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SISTEMA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="?controller=pages&accion=inicio">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=productype&accion=index">Tipo_Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=product&accion=index">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=productprovider&accion=index">Proveedor_productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=priceproduct&accion=index">Precio_productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=provider&accion=index">Proveedores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=persontype&accion=index">Tipo_persona</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=tax&accion=index">Impuesto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=person&accion=index">Personas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=ticket&accion=index">Factura</a>
      </li>
    </ul>
  </div>
</nav>
<!-----------------nav--------------->


    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1><?php include_once("ruteador.php"); ?></h1>
        </div>
      </div>
    </div>

    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>
