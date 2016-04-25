<?php
    include('./funciones.php');
    $mysqli = conectaBBDD();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-3"></div>
                <div class="col-xs-6 ">
        <?php
            $consulta_equipos = $mysqli -> query("SELECT * FROM equipos");
            
            $num_equipos = $consulta_equipos -> num_rows;
            echo '<table class="table text-center table-striped table-bordered table-condensed">';
            echo '<tr>';
            echo '<th> </th>';
            echo '<th> id equipo</th>';
            echo '<th> nombre equipo</th>';
            echo '<th> ciudad equipo</th>';
            echo '</tr>';
            for ($i = 0; $i < $num_equipos; $i++){
               $fila = $consulta_equipos -> fetch_array();
               $id_equipo = $fila['id_equipo'];
               $nombre_equipo = $fila['nombre'];
               $ciudad_equipo = $fila['ciudad'];
               echo '<tr id="boton_'.$i.'">';
               echo '<td> <button onClick="borra('.$i.','.$id_equipo.');" class="btn btn-danger btn-xs">
                     <i class="glyphicon glyphicon-trash" ></i></button></td>';
               echo '<td>'.$id_equipo . '</td>';
               echo '<td>'.$nombre_equipo. '</td>';
               echo '<td>'.$ciudad_equipo. '</td>';
               echo '</tr>';
            }
            echo '</table>'
            
        ?>
                    
            <div id="carga"></div>
        </div>
                <div class="col-xs-3"></div>
                </div>
        </div>
        <script src="js/jquery-1.12.0.min.js"></script>
        <script>
            function borra(numero, _idEquipo){
                $("#boton_"+numero).hide("slow");
                $("#carga").load('borraFila.php',{
                   idEquipo: _idEquipo
                });
            }
        </script>
        
    </body>
</html>
