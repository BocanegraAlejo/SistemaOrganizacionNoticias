<html>
<head>
<title> Publicar </title>
<meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<center>
<body>
<?php
// Notificar todos los errores excepto E_NOTICE
// Este es el valor predeterminado establecido en php.ini
error_reporting(0);

include('conexion.php');
	$id_nota=$_REQUEST['pub'];
 

  $registros=mysqli_query($conexion,"update nota
                         set publicar='1' 
                         where id_nota='$id_nota'") or
  die("Problemas en el select:".mysql_error($conexion));



    mysqli_free_result($result);
	mysqli_close($conexion);
 
 echo "<script> location.href='info.php';</script>";
 die();
	?>
</body>
</html>