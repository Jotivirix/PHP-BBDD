
<?php
    include('./funciones.php');
    $mysqli = conectaBBDD();
    $nombreUsuario = $_POST['nombreUsuario'];
    $pass = $_POST['pass'];
            
    $consulta = $mysqli -> query("SELECT * FROM usuario where codigo = '$nombreUsuario' and pass = '$pass';");
    $num_filas = $consulta -> num_rows;
    
    if ($num_filas > 0){
       echo '<h1> LOGIN CORRECTO </h1>';
    }
    else {
        echo '<h1> anda y que te peinen  </h1>';
    }
    ?>