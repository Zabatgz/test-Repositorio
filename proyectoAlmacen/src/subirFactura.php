<?php
  session_start();

  include_once('header_dueno.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Inicio de Sesión</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 deeed7 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!--<link rel="stylesheet" href="../css/login.css">-->

  </head>
    <link rel="stylesheet" href="../css/login.css">
  <body style="background-color:#141618">
    <form style="background-color: #212529" action="validarFactura.php" method="POST">
        <h2 style="color: white;">Subir factura</h2>
        <input type="text" placeholder=" Nombre Factura" name="nombreFactura" required>

        <input style= "display: flex" type="file" placeholder="SKU"  name="" required>
        <input type="submit" value="Ingresar" name="btningresar">
        <br>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>