<?php

    include('./funciones.php');
    //require './menuAdmin.php';
    
    
    $mysqli = conectaBBDD();
    
    $nombreUsuario = $_POST['nombreUsuario'];
    
    $pass = $_POST['pass'];
    
    $email = $_POST['nombreUsuario'];
    
    //$pass = password_hash($pass, PASSWORD_DEFAULT);
            
    $consulta = $mysqli -> query("SELECT * FROM usuario where (nombreUsuario = '$nombreUsuario' OR email = '$email');");
    
    $num_filas = $consulta -> num_rows;
    
    if ($num_filas > 0){
        session_start();
        $_SESSION['usuario'] = $nombreUsuario;
        $resultado = $consulta ->fetch_array();
        $passGuardada = $resultado['pass'];
        if (password_verify($pass, $passGuardada)){
            echo $pass;
            $tipo = $resultado['tipo'];
            switch ($tipo) {
                case 0 : require 'menuUsuario.php'; break;
                case 2 : require 'menuAdmin.php'; break;
            }
        }else 
        {
            echo '<h1> password incorrecta  </h1>';
        }
        
    }
    else {
        echo '<h1> anda y que te peinen  </h1>';
    }

?>