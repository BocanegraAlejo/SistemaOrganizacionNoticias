<html>
<head>
<title>AVC</title>
</head>
<body>
<?php
   date_default_timezone_set('America/Argentina/Buenos_Aires');

include('conexion.php');
$usuario=$_REQUEST ['usuario'];
$clave=$_REQUEST ['clave'];
$contra = mysqli_query($conexion,"SELECT clave FROM usuarios WHERE nombre = '$usuario'");
if($row = mysqli_fetch_assoc($contra)){
   //Guardo los datos de la BD en las variables de php
   $var1 = $row["clave"];
}


    
if($var1 == $clave and $usuario=='Alejandra')
    {
      //Creamos sesión
      session_start();  
      //Almacenamos el nombre de usuario en una variable de sesión usuario
      $_SESSION['nombre'] = $usuario;
      //Redireccionamos a la pagina: index.php
  echo "<script type='text/javascript'>
         location.href='info.php';
     </script>";
    }
  else
    if($var1 == $clave)
    {
      //Creamos sesión
      session_start();  
      //Almacenamos el nombre de usuario en una variable de sesión usuario
      $_SESSION['nombre'] = $usuario;  
      //Redireccionamos a la pagina: index.php
  echo "<script type='text/javascript'>
         location.href='info2.php';
     </script>"; 
    }
    else
    {echo "<script type='text/javascript'>
     alert('Usuario o clave incorrectos, ingrese nuevamente sus datos.');
     location.href='index.php';
     </script>";
     //header('Location: index.html');
   }
 
//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
mysqli_free_result($contra);

/*Mysql_close() se usa para cerrar la conexión a la Base de datos .*/
mysqli_close($conexion);

?>


</body>
</html>