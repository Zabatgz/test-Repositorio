<?php
 

    session_start();
    
    $nombre = $_SESSION['nombreUsuario'];
    $idSucursal = $_SESSION['idSucursal'];
    include_once('baseDatos.php');
    include_once('header_encargado.php');
    $sucursal = $_GET['sucursal'];
    $sql = "select * from Producto where Sucursal_idSucursal = '$idSucursal'";
    $res = $bd->query($sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Visualizar Stock Encargado</title>
    <!-- Required meta tags -->
    <link rel="icon" href="../img/favicon.png" type="image/x-icon" >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
  </head>
  <body style="background-color: #141618">

    <a href="../index.php">
        <p class="m-0"><img src="../img/logo.png" alt=""></p>
    </a>
    <br><br><br>
     
    <div id="formulario" class="container">
        <div class="row">
            <table class="table table-dark table-borderless table-hover">
                <thead>
                    <tr class="table-active">
                        <th>Producto</th>
                        <th>ID</th>
                        <th>SKU</th>
                        <th>Estado</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($reg = $res->fetch_array(MYSQLI_ASSOC)){
                            $nombreProducto = $reg['nombreProducto'];
                            $idProducto = $reg['idProducto'];
                            $sku = $reg['sku'];
                            $estado = $reg['estado'];
                            $stockProducto = $reg['stockProducto'];
                    ?>
                    <tr>
                        <td>
                            <?=$nombreProducto?>
                        </td>
                        <td>
                            <?=$idProducto?>
                        </td>
                        <td>
                            <?=$sku?>
                        </td>
                        <td>
                            <?=$estado?>
                        </td>
                        <td>
                            <?=$stockProducto?>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>

            <br><br>
        </div>
    </div>  



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>