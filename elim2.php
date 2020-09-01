<html>
<head>
<title> Eliminar usuarios </title>
<meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<center>
<body>
<?php
// Notificar todos los errores excepto E_NOTICE
// Este es el valor predeterminado establecido en php.ini
error_reporting(E_ALL ^ E_NOTICE);

include('conexion.php');

	$usuario=$_REQUEST['usuario'];
  	$contra2 = mysqli_query($conexion,"SELECT nombre FROM usuarios WHERE nombre = '$usuario'");
if($row1 = mysqli_fetch_assoc($contra2)){
   //Guardo los datos de la BD en las variables de php
   $var1 = $row1["nombre"];
}
$registros=mysqli_query($conexion,"select nombre from usuarios
                       where nombre='$usuario'");
	if ($reg=mysqli_fetch_array($registros))
	{
  	mysqli_query($conexion,"delete from usuarios where nombre='$usuario'");
    mysqli_free_result($contra2);
	mysqli_close($conexion);
    
//Redireccionamos a la pagina: index.php
    echo "<script type='text/javascript'>
     alert('Usuario eliminado con exito');
     location.href='info.php';
     </script>";
die();
}
else
{
  //Redireccionamos a la pagina: index.php
    echo "<script type='text/javascript'>
     alert('No existen mas usuarios');
     location.href='elim.php';
     </script>";
     die();
}  
	?>


</body>
</html>

