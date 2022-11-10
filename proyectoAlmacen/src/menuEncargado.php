<?php
  session_start();
  $nombre = $_SESSION['nombreUsuario'];
  include_once('header_encargado.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Menu Encargado</title>
    <!-- Required meta tags -->
    <link rel="icon" href="../img/favicon.png" type="image/x-icon" >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
  </head>
  <body style="background-color: #141618">
  <a id="iniciar" href="../index.html">
      <!-- <p class="m-0"><input id="btnCerrarSesion" type="button" value="Cerrar Sesion"></p>-->
    </a>
    <a href="../index.php">
        <p class="m-0"><img src="../img/logo.png" alt=""></p>
    </a>
    <br>

 
    <div class="container-fluid text-light p-5" id="backgroud">
    <div class="container bg-dark p-5">
        <h1 class="display-4">Bienvenido, <?= $nombre ?> </h1>

        <p>¿Que desea realizar?</p>
        <hr>
        <p>- Visualizar Factura: Permite visualizar el documento de la factura a la sucursal correspondiente.</p>
        <p>- Añadir Producto: Permite insertar un nuevo producto a la base de datos.</p>
        <p>- Gestionar Stock: Permite de manera manual modificar los datos de los productos.</p>
        <p>- Visualizar Stock: Permite seleccionar las distintas sucursales y visualizar sus productos.</p>
        <hr>
        <br> 
        <div class="btn-group btn-group-lg" role="group" aria-label="...">
          <a type="button" href="VisualizarFactura.php" class="btn btn-outline-light">Visualizar Factura</a>
          <a type="button" href="añadirProducto.php" class="btn btn-outline-light">Añadir Producto</a>
          <a type="button" href="gestionarStockEncargado.php" class="btn btn-outline-light">Gestionar Stock</a>      
          <a type="button" href="visualizarStockEncargado.php" class="btn btn-outline-light">Visualizar Stock</a>       
        </div>
    </div>
    </div>
    





    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>