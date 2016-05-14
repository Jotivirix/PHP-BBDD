<?php
//session_start();
$nombre_Usuario = $_SESSION['usuario'];

//Si el usuario ha iniciado sesión
//Cargamos todos sus datos
//if(isset($_SESSION['usuario'])){

?>

<nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#"><?php echo $nombre_Usuario; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
            <ul class="nav navbar-nav">                
                <li>                    
                    <p class="navbar-btn">                      
                        <a href="#" class="btn btn-primary" id="nuevoUsuario"> Nuevo Usuario </a>
                    </p>                    
                </li>                
            </ul>
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

<div class="container" id="menuCentralAdmin">
    
    
    
</div>

<script>
            
            $('#nuevoUsuario').click(function(){                
                $('#menuCentralAdmin').load('adminNuevoUsuario.php');
            });
            
</script>