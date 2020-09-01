<html>
<head>
<title>AVC</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/footer.css">
<meta name="viewport" content="width=device-width, initial-escale=1.0">
<script language="JavaScript">
<!--
  javascript:window.history.forward(1);
//-->
</script> 
</head>
<body background="img/fondoprincipal2.jpg" style="color:black;font-size:18px">
<form method="post" id="flogin" action="usuario.php">
<center>
<font style="font-size:30px">
<img src="img/logoavc.png" width="280px">
<br>
<div style="font-size:20px color: write;">
<div class="titulo">

SISTEMA DE ORGANIZACION DE NOTICIAS
</div>
</font>
<?php
include('conexion.php');
$resultado_consulta_mysql=mysqli_query($conexion,'select nombre from usuarios');
?>
<div class="jumbotron boxlogin">
<div class="container">
<label>Nombre de usuario: </label>
<br>
<select name="usuario" class="form-control">
<?php
while ($lista=mysqli_fetch_array($resultado_consulta_mysql)){
	echo "<option value='$lista[nombre]'>".$lista['nombre']. "</option>";
}
?>
</select>
<br>
<label>Contraseña: </label>
<input type="password" name="clave" class="form-control" required>
<br>
<input type="submit" class="btn btn-success" value="Iniciar sesion">
</div>
</form>
</div>
<div id="copyright-out">
	<div id="copyright" class="wrap">
    	Copyright&nbsp; 2017-2018&nbsp; -&nbsp; SISTEMA DE ORGANIZACIÓN DE NOTICIAS&nbsp; -&nbsp;&nbsp;Desarrollado por: Alejo Bocanegra y Sebastian Arias - E.E.S.T N°1 <br><a>&copy; Todos los derechos Reservados</a>
	</div>
	</div>
	<!-- Copyright Ends -->
</body>
</html>