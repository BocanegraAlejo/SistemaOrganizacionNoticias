<html>
<head>
<title>Registro de noteros</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<center>
<body>
<?php
$notero=$_REQUEST ['notero'];
include("conexion.php");

$registros=mysqli_query($conexion,"select nombre from notero
                        where nombre='$notero'");
  if($row=mysqli_fetch_assoc($registros)){
   //Guardo los datos de la BD en las variables de php
    echo "<script type='text/javascript'>
     alert('Ese notero ya existe, elija otro por favor ;)');
     location.href='notero.php';
     </script>";
 
   }
   else
   {


mysqli_query($conexion,"insert into notero values ('$notero','')");
//mysqli_query($conexion,"insert into nota values ('$notero','$titulo')");
mysqli_close($conexion);
//Redireccionamos a la pagina: index.php
  echo "<script type='text/javascript'>
     alert('Notero registrado con exito');
     location.href='info.php';
     </script>";
die();
}
?>
</body>
</html>

