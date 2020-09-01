<html>
<head>
<title>Registro de programas</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<center>
<body>
<?php
$prog=$_REQUEST ['prog'];
include("conexion.php");

$registros=mysqli_query($conexion,"select nombre from programas
                        where nombre='$prog'");
  if($row=mysqli_fetch_assoc($registros)){
   //Guardo los datos de la BD en las variables de php
    echo "<script type='text/javascript'>
     alert('Ese Programa ya existe, por favor elija otro ;)');
     location.href='prog.php';
     </script>";
 
   }
   else
   {

include("conexion.php");
mysqli_query($conexion,"insert into programas values ('$prog','')");
//mysqli_query($conexion,"insert into nota values ('$notero','$titulo')");
mysqli_close($conexion);
//Redireccionamos a la pagina: index.php
  echo "<script type='text/javascript'>
     alert('Programa registrado con exito');
     location.href='info.php';
     </script>";
//echo "<script language=Javascript> location.href=\"info.php\"; </script>"; 
die();
}
?>

</body>
</html>

