<html>
<head>
<title>REGISTRO USUARIOS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style>
body {
background: #606c88; /* Old browsers */
background: -moz-linear-gradient(top, #606c88 36%, #3f4c6b 58%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, #606c88 36%,#3f4c6b 58%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, #606c88 36%,#3f4c6b 58%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#606c88', endColorstr='#3f4c6b',GradientType=0 ); /* IE6-9 */
}
h2 {
	font-size: 50px;
	font-family: fantasy;
	color: black;
}
h3 {
	color: #00ff00;
	font-size: 40px;
}
h4 {
	color: black;
	font-family: sans-serif;
	font-size: 20px;
}
html {
margin: 0px;
padding: 0px;
}
</style>
</head>
<center>
<body>
<?php
$usuario=$_REQUEST ['usuario'];
$clave=$_REQUEST ['clave'];
include("conexion.php");

$registros=mysqli_query($conexion,"select nombre from usuarios
                        where nombre='$usuario'");
  if($row=mysqli_fetch_assoc($registros)){
   //Guardo los datos de la BD en las variables de php
    echo "<script type='text/javascript'>
     alert('Ese usuario ya existe, elija otro por favor ;)');
     location.href='regist.php';
     </script>";
 
   }
   else
   {



mysqli_query($conexion,"insert into usuarios values ('$usuario','$clave','')");
//mysqli_query($conexion,"insert into nota values ('$notero','$titulo')");
mysqli_free_result($registros);
mysqli_close($conexion);
//Redireccionamos a la pagina: index.php
  echo "<script type='text/javascript'>
     alert('Usuario registrado con exito');
     location.href='info.php';
     </script>";

die();
}

?>
</body>
</html>

