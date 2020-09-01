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
<title>Modificación de noticias</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<center>
<body>

<br>
<br>
<?php
include ('conexion.php');
$idnota=$_REQUEST['idnota'];
$notero=$_REQUEST['notero'];
$noterov=$_REQUEST['noteroviejo'];

$result=mysqli_query($conexion,"select id_notero from notero where 
  nombre='$notero'");
if($row=mysqli_fetch_assoc($result)){
   //Guardo los datos de la BD en las variables de php
  $num = $row["id_notero"];
 
   }


$registros=mysqli_query($conexion, "update nota
                         set f_nota='$_REQUEST[datenuevo]' 
                         where f_nota='$_REQUEST[dateviejo]' and id_nota='$idnota'") or
  die("Problemas en el select:".mysql_error($conexion));
  
  $registros=mysqli_query($conexion,"update nota
                         set titulo='$_REQUEST[titulonuevo]' 
                         where titulo='$_REQUEST[tituloviejo]' and id_nota='$idnota'") or
  die("Problemas en el select:".mysql_error($conexion));

  $registros=mysqli_query($conexion,"update nota
                         set id_notero='$num' 
                         where (id_notero='$noterov') and (id_nota='$idnota')") or
  die("Problemas en el select:".mysql_error($conexion));
  
  $registros=mysqli_query($conexion,"update nota
                         set entrevistado='$_REQUEST[entrevistadonuevo]' 
                         where entrevistado='$_REQUEST[entrevistadoviejo]' and id_nota='$idnota'") or
  die("Problemas en el select:".mysql_error($conexion));

    $registros=mysqli_query($conexion,"update nota
                         set cargo='$_REQUEST[cargonuevo]' 
                         where cargo='$_REQUEST[cargoviejo]' and id_nota='$idnota'") or
  die("Problemas en el select:".mysql_error($conexion));

      $registros=mysqli_query($conexion,"update nota
                         set descripcion='$_REQUEST[desnuevo]' 
                         where descripcion='$_REQUEST[desviejo]' and id_nota='$idnota'") or
  die("Problemas en el select:".mysql_error($conexion));


        $registros=mysqli_query($conexion,"update nota
                         set observaciones='$_REQUEST[obnuevo]' 
                         where observaciones='$_REQUEST[obviejo]' and id_nota='$idnota'") or
  die("Problemas en el select:".mysql_error($conexion));

          $registros=mysqli_query($conexion,"update nota
                         set f_sal1='$_REQUEST[sal1nuevo]' 
                         where f_sal1='$_REQUEST[sal1viejo]' and id_nota='$idnota'") or
  die("Problemas en el select:".mysql_error($conexion));


          $registros=mysqli_query($conexion,"update nota
                         set f_sal2='$_REQUEST[sal2nuevo]' 
                         where f_sal2='$_REQUEST[sal2viejo]' and id_nota='$idnota'") or
  die("Problemas en el select:".mysql_error($conexion));

?>
<?php
if ($usuario=='Alejandra'){
//Redireccionamos a la pagina: index.php 
echo "<script language=Javascript> location.href=\"info.php\"; </script>"; 
die();
}
else
{
//Redireccionamos a la pagina: index.php
echo "<script language=Javascript> location.href=\"info2.php\"; </script>"; 
die();
}
?>

</body>
</html>