<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.structure.min.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.theme.min.css.css" type="text/css">


<!-- DIV DEL FORMULARIO -->
<div class="row">
    <div class="col-xs-3"></div>
    <div class="col-xs-6">
        <br>      
        
        <form id="nuevoUsuario">            
            
            <label for="exampleInputNombre">Introduzca Su Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre">
            
            <br>
            
            <label for="exampleInputApellidos">Introduzca Sus Apellidos</label>
            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
            
            <br>
            
            <label for="exampleInputFechaNacimiento">Fecha de Nacimiento</label>
            <input type="text" class="form-control" id="fechaNacimiento" placeholder="Fecha de Nacimiento">
                        
            <br>
        
            <label for="exampleInputUsuario">Nombre de Usuario</label>
            <input type="text" class="form-control" id="nombreUsuario" placeholder="Nombre de Usuario" required>       
        
            <br>
        
            <label for="exampleInputPassword">Introduzca Su Contraseña</label>
            <input type="password" class="form-control" id="pass" placeholder="Introduzca su Contraseña" required>
            
            <br>
        
            <label for="exampleInputEmail">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Introduzca su E-Mail">
        
            <br>
            
            <label for="exampleInputUser">Elija el Tipo de Usuario</label>
                <div class="dropdown">
                    <button id="botonTipo" class="btn btn-default btn-block dropdown-toggle" type="button" data-toggle="dropdown">Tipo
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu btn-block" >
                        <li><a href="#" onclick="cambiaTipo('1','Cliente')">1 - Cliente</a></li>
                        <li><a href="#" onclick="cambiaTipo('2','Administrador')">2 - Administrador</a></li>
                        <li><a href="#" onclick="cambiaTipo('3','Peluquero')">3 - Peluquero</a></li>
                        <li><a href="#" onclick="cambiaTipo('4','Veterinario')">4 - Veterinario</a></li>
                    </ul>
                </div>        
                
            <br>
            
            <label for="exampleInputDNI">DNI</label>
            <input type="text" class="form-control" id="DNI" placeholder="Introduzca Su DNI">
            
            <br>
            
            <div class="row" style="clear: both">
                
                    <div class="col-xs-6">
                        <button id="botonEnviar" class="btn btn-info btn-block"> REGISTRAR </button>
                    </div>
                    <div class="col-xs-6">
                        <button id="botonCancelar" class="btn btn-warning btn-block"> CANCELAR </button>
                    </div>    
                
            </div>
            
        </form>
        
    </div>
    <div class="col-xs-3"></div>
</div>

<br>

<!-- DIV DE LOS BOTONES
<div class="row" style="clear: both">
    <div class="col-xs-3"></div>
    <div class="col-xs-3">
        <button id="botonEnviar" class="btn btn-info btn-block"> REGISTRAR </button>
    </div>
    <div class="col-xs-3">
        <button id="botonCancelar" class="btn btn-warning btn-block"> CANCELAR </button>
    </div>    
    <div class="col-xs-3"></div>
</div>
 -->
<br>

<!-- DIV DEL MENSAJE DE COMPROBACIÓN -->
<div class="row">
    <div class="col-xs-3"></div>
    <div class="col-xs-6" id="cargaResultado" class="text-center"></div> 
    <div class="col-xs-3"></div>
</div>
        
               
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery-ui.min.js"></script>

<script>
    
    $('#nuevoUsuario').validate({
        
    });
    
    $('#fechaNacimiento').datepicker({
        dateFormat:"dd/mm/yy",
        firstDay: 1,
        dayNamesMin: ["Do","Lu","Ma","Mi","Ju","Vi","Sá"],
        monthNamesMin: ["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"]
    });
    
    var _tipo = 0;    
    function cambiaTipo(_valor, _texto){
        $('#botonTipo').html(_texto + ' ' + '<span class="caret"></span>');
        _tipo = _valor;
        console.log(_tipo);
    }
    
    $('#botonEnviar').click(function(){
                var _nombreUsuario = $('#nombreUsuario').val();                
                var _pass = $('#pass').val();
                var _DNI = $('#DNI').val();
                var _email = $('#email').val();
                
                $('#cargaResultado').load('adminInsertaUsuario.php',{
                    nombreUsuario: _nombreUsuario,
                    pass: _pass,
                    email: _email,
                    DNI: _DNI,                    
                    tipo: _tipo
                });
            });
</script>