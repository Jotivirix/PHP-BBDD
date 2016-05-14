<?php
    include('./funciones.php');
    $mysqli = conectaBBDD();
  
    $nombreUsuario = $_POST['nombreUsuario'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $DNI = $_POST['DNI'];
    $tipo = $_POST['tipo'];
    
    //Encriptamos la contraseña
    $pass = password_hash($pass, PASSWORD_DEFAULT);
            
    $inserta_usuario = $mysqli -> query("INSERT INTO VeterinarioPHP.Usuario (nombreUsuario, pass, email, tipo, DNI )"
                                        . " VALUES ('$nombreUsuario','$pass','$email','$tipo','$DNI')");
    
    if($mysqli->affected_rows==1){
    echo "Insertado Correctamente el Usuario con DNI: " .$DNI;
    }
    else{
        echo "No se ha podido insertar el Usuario" . $mysqli->affected_rows;
    }
?>