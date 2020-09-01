<?php
//creamos la sesión
session_start();
//validamos si se ha hecho o no el inicio de sesión correctamente
//si no se ha hecho la sesión nos regresará a index.php
if(!isset($_SESSION['nombre'])) 
{
  header('Location: index.php'); 
  exit();
}
$usuario=$_SESSION['nombre'];
echo "<font size='6' style='position:absolute;top:65;left:0; color:lightblue'><h4>Hola $usuario!</h4></font>";

include('conexion.php');




mysqli_close($conexion);
?>
<html>
<head>
<title>AVC</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilotabla.css">
<link rel="stylesheet" href="css/footer.css">
</head> 
<body>
	<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" 
            data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="img/avc.png" width="130" style="margin-top:-10px;"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="activ"><a href="subir.php"><span class="glyphicon glyphicon-open"></span>Subir Noticia <span class="sr-only">(current)</span></a></li>
        <li><a href="notero.php"><span class="glyphicon glyphicon-open"></span>&nbsp;Registrar Notero</a></li>
        <li class="dropdown">
          <li><a href="prog.php"><span class="glyphicon glyphicon-open"></span>&nbsp;Registrar Programa</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                aria-expanded="false">Usuarios <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="regist.php">Registrar</a></li>
            <li class="divider"></li>
            <li><a href="elim.php">Eliminar</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cerrarsesion.php"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Salir </a></li>
        <li class="dropdown">
          
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br>
<section>
	<center>
    <input type="text" class="form-control" name="busqueda"  id="busqueda" placeholder="Buscar..." style="width:300px">
</section>
<br>
<br>
<br>
<br>
<section class="table table-responsive" id="tabla_resultado">
        <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
</section>
<script src="js/jquery.min.js"></script>
<script src="js/peticion.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
	</center>

</body>
</html>
