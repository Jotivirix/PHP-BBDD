<?php
    include('./funciones.php');
    $mysqli = conectaBBDD();
    
    $id_equipo = $_POST['idEquipo'];
            
    $consulta_equipos = $mysqli -> query("DELETE FROM equipos WHERE id_equipo = '$id_equipo';");
    
    echo "Borrado correctamente el equipo con id: " .$id_equipo;
   
?>

