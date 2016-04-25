<?php

function conectaBBDD(){
    require ('configuracion.php');
    $conexion_mysql = new mysqli($servidor, $user, $password, $db);
    $conexion_mysql -> query("SET NAMES UTF-8");
    return $conexion_mysql;
}

?>