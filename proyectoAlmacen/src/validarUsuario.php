<?php
    session_start();
    include_once("baseDatos.php");
    $rut = $_POST['rut'];
    $pwd = $_POST['password'];
    $sql = "select * from Funcionario where rutFuncionario ='$rut';";
    $res = $bd->query($sql);


    if ($res->num_rows !== 0){
        //esta en la tabla
        $reg = $res->fetch_array(MYSQLI_ASSOC);
        if ($pwd === $reg['password']) {
          // password correcta
          $_SESSION['nombreUsuario'] = $reg['nombreFuncionario'];
          $_SESSION['cargo'] = $reg['Cargo_idCargo'];
          $_SESSION['idSucursal'] = $reg['Sucursal_idSucursal'];
          //echo "<script> alert('Bienvenido $nombre'); window.location='principal.html' </script>";
          if (isset($_SESSION['cargo'])){
            switch($_SESSION['cargo']){
              case 1:
                header("Location: menuDueño.php");
                break;
              case 2:
                header("Location: menuEncargado.php");
                break;
                default;
            }
          }
        } else {
          //error en la password
          //ARREGLAR ESTA PARTE
          echo '<script type="text/javascript"> alert("Contraseña incorrecta"); window.location="../index.html" </script>';
          //header("Location: errorPassword.php");
        }
    } else {
        //no esta en la tabla
        echo '<script type="text/javascript"> alert("Usuario inexistente"); window.location="../index.html" </script>';
        //header("Location: usuarioIncorrecto.php");
    }

?>