<?php namespace Views;

	$template = new Template();
	/**
	* Clase para Plantilla
	*/
	class Template
	{
		
		public function __construct()
		{
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Trámite Documentario</title>
	<script type="text/javascript" src="<?php echo URLV ?>js/jquery-1.9.1.js"></script>!
	
	<link rel="stylesheet" type="text/css" href="<?php echo URLV ?>css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo URLV ?>js/bootstrap.min.js"></script>

</head>

<body>

<!-- BARRA DE NAVEGACION !!!!-->
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo URLM ?>">Trámite Documentario</a>
    </div>
    <ul class="nav navbar-nav active">
      <li class="active"><a href="#">Inicio</a></li>
      <li><a href="#">Page 2</a></li> 

      <!-- PARA AREAS !-->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Areas
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo URLM ?>/areas/crear">Crear</a></li>
          <li><a href="<?php echo URLM ?>/areas/editar">Editar</a></li>
          <li><a href="<?php echo URLM ?>/areas/buscar">Buscar</a></li>
          <li><a href="<?php echo URLM ?>/areas/ver">Ver</a></li>
          <li><a href="<?php echo URLM ?>/registrar/usuario">Todos</a></li> 
        </ul>
      </li> <!-- AQUI TERMINA ... !-->

      <!-- PARA MESA DE PARTES !-->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Acciones
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Trámites</a></li>
          <li><a href="<?php echo URLM ?>/tramites/crear">Nuevo Trámite</a></li>
          <li><a href="<?php echo URLM ?>/tramites/buscar">Buscar</a></li>
          <li><a href="<?php echo URLM ?>/usuarios/crear">Registrar Usuario</a></li> 
        </ul>
      </li> <!-- AQUI TERMINA ... !-->


      <!-- PARA SUPER USUARIO !-->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">AccionesSU
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo URLM ?>/empleados/crear">Registrar Empleado</a></li>

        </ul>
      </li> <!-- AQUI TERMINA ... !-->

    </ul>
    <ul class="nav navbar-nav navbar-right">
    <!--PERFIL !-->
      <li><a href="<?php echo URLM ?>/perfil/barrita"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
      <!--INGRESAR!-->
      <li><a href="<?php echo URLM ?>/ingresar/empleado"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>
    
      <!--SALIR!-->
      <li><a href="<?php echo URLM ?>"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>

    </ul>
  </div>
</nav>
					<!-- ..............FIN BARRA DE NAVEGACION !!!......................!-->

<div>


	<p>MOSTRANDO POSIBLES ERRORES...</p>
	<p>.............................</p>
	<p>....................... .-. .</p>

  <div>
  <ul>
    <li><a href="<?php echo URLM ?>usuarios/crear">Crear Usuarios</a></li>
    <li><a href="<?php echo URLM ?>empleados/crear">Crear Empleados</a></li>
    <li><a href="<?php echo URLM ?>personas">Todas Las Personas</a></li>
    <li><a href="<?php echo URLM ?>tramites/crear">Crear Tramite</a></li>
    <li><a href="<?php echo URLM ?>tramites">Todos los Tramite</a></li>
    <li><a href="<?php echo URLM ?>tramites/editar/2">Editar tr #2</a></li>
    <li><a href="<?php echo URLM ?>tramites/ver/2">Muestra tramite #2</a></li>

  </ul>
</div>


	<?php 
		}
		public function __destruct(){
 ?>
</div>



						<!-- ..............TÍTULO  !!!!.......................-->
<div class="jumbotron text-center  ">
  <h1>TRÁMITE DOCUMENTARIO</h1>
  <p>Bienvenidos !</p> 
</div>

						<!-- ..............TÍTULO !!!!.......................-->

					
			
	</div>
<p align="center" class="parrafo">By CS unsa</p>
</body>
</html>	

<?php			
		}
		
	}


 ?>
