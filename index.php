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
        <div class="container" id="centro">
            <div class="row">
                <div class="col-xs-3"></div>
                <div class="col-xs-6 ">
        
                    <h2>La página de pruebas </h2>
                    <br><br>
                    <input id="nombreUsuario" class="form-control" type="text" placeholder="Nombre de Usuario">
                    <br><br>
                    <input id="pass" class="form-control" type="password" placeholder="Introduce tu contraseña">
                    <br><br>
                    <button id="botonInicio" class="btn btn-primary btn-block" >ENTRAR</button>
                </div>
                <div class="col-xs-3"></div>
                </div>
        </div>
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            
            $('#botonInicio').click(function(){
                var _nombreUsuario = $('#nombreUsuario').val();
                var _pass = $('#pass').val();
                
                $('#centro').load('login.php',{
                    nombreUsuario: _nombreUsuario,
                    pass : _pass
                });
            });
            
            
            function borra(numero, _idEquipo){
                $('#boton_'+numero).hide("slow");
                $('#carga').load('borraFila.php', {
                    idEquipo: _idEquipo
                });
            }
        </script>
        
    </body>
</html>