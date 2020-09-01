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
 <meta charset="UTF-8">
  <title>CARGAR NOTICIAS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  

</head>
<body>
<center>
<?php
$f_inicio=$_REQUEST ['f_inicio'];
$titulo=$_REQUEST ['titulo'];
$notero=$_REQUEST ['notero'];
$entrevistado=$_REQUEST ['entrevistado'];
$cargo=$_REQUEST ['cargo'];
$descripcion=$_REQUEST['descripcion'];
$observaciones=$_REQUEST ['observaciones'];
$f_salida1=$_REQUEST ['f_salida1'];
$f_salida2=$_REQUEST ['f_salida2'];
$prog=$_REQUEST ['prog'];
 list ($anox,$mesx,$diax)=explode ("-",$f_inicio);
 $f_nota2=[$diax,$mesx,$anox];
 list ($anox1,$mesx1,$diax1)=explode ("-",$f_salida1);
 $f_sal1=[$diax1,$mesx1,$anox1];
 list ($anox2,$mesx2,$diax2)=explode ("-",$f_salida2);
 $f_sal2=[$diax2,$mesx2,$anox2];




include ('conexion.php');
$result=mysqli_query($conexion,"select id_notero from notero where nombre='$notero'");
if($row=mysqli_fetch_assoc($result)){
   //Guardo los datos de la BD en las variables de php
   $num = $row["id_notero"];
   }
$result2=mysqli_query($conexion,"select id_usuario from usuarios where nombre='$usuario'");
if($row2=mysqli_fetch_assoc($result2)){
   //Guardo los datos de la BD en las variables de php
   $num2 = $row2["id_usuario"];
   }
   $result3=mysqli_query($conexion,"select id_prog from programas where nombre='$prog'");
if($row3=mysqli_fetch_assoc($result3)){
   //Guardo los datos de la BD en las variables de php
   $num3 = $row3["id_prog"];
   }



mysqli_query($conexion,"insert into nota values ('$f_inicio','$titulo','$num','$entrevistado','$cargo','$descripcion','$observaciones','$f_salida1','$f_salida2','','$num2','','$num3')");
//mysqli_query($conexion,"insert into notero values ('$notero','')");
mysqli_free_result($result);
mysqli_close($conexion);


?>
<br>
<br>
<?php
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

