<?php
    $host = "localhost";
    $usu = "root";
    $pwd = "";
    $bbdd = "almacenes";
    $bd = new mysqli();
    $bd->connect($host, $usu, $pwd, $bbdd);
    if($bd->connect_errno !== 0) {
        die ("ERROR $bd->connect_error");
    } 

?>