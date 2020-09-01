<?php
session_start();
//validamos si se ha hecho o no el inicio de sesión correctamente
//si no se ha hecho la sesión nos regresará a index.php
if(!isset($_SESSION['nombre'])) 
{
  header('Location: index.php'); 
  exit();
}
$usuario=$_SESSION['nombre'];
?>
<html>
<head>
	<title></title>

</head>

<body>
<html>
<head>
<title> Borrar noticia </title>
</head>
<center>


<?php
	$idnota=$_REQUEST['idnota'];
	
	//$conexion=mysql_connect("localhost","root","") or
  	//die("Problemas en la conexion");
include('conexion.php');
	//mysql_select_db("son",$conexion) or
  	//die("Problemas en la selección de la base de datos");

	$registros=mysqli_query($conexion,"select id_nota from nota
                       where id_nota='$idnota'") or
  	die("Problemas en el select:".mysql_error());

	if ($reg=mysqli_fetch_array($registros))
	{
  	mysqli_query($conexion,"delete from nota where id_nota='$idnota'") or
    	die("Problemas en el select:".mysqli_error());
	mysqli_close($conexion);}

if ($usuario=='Alejandra'){
  echo "<meta http-equiv='REFRESH' content='0;URL=info.php'>";
}
else
{
  echo "<meta http-equiv='REFRESH' content='0;URL=info2.php'>";
}


?>
</body>
</html>