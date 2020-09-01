<?php
session_start();
//validamos si se ha hecho o no el inicio de sesión correctamente
//si no se ha hecho la sesión nos regresará a index.php
if(!isset($_SESSION['nombre'])) 
{
  header('Location: index.php'); 
  exit();
}
error_reporting(0);
   date_default_timezone_set('America/Argentina/Buenos_Aires');

$usuario=$_SESSION['nombre'];
/////// CONEXIÓN A LA BASE DE DATOS /////////
include 'conexion.php';
//////////////// VALORES INICIALES ///////////////////////

$result = mysqli_query($conexion,"SELECT id_usuario FROM usuarios WHERE usuarios.nombre='$usuario'");
if($row = mysqli_fetch_assoc($result)){
   //Guardo los datos de la BD en las variables de php
   $var1 = $row["id_usuario"];
}

$desde=date("Y").'-01-01';
$hasta=date('Y-m-d');

if ($_POST['desde']!="")
{
	$desde=$_POST['desde'];}

	if ($_POST['hasta']!="")
{
	$hasta=$_POST['hasta'];}
echo "<p style='position:absolute;left:20px;top:160px;font-size:15px;color:lightblue'>Desde: </p>";
echo "<input id='desde' style='position:absolute;left:70px;top:160px' type='date' value=".$desde.">";
echo "<p style='position:absolute;left:240px;top:160px;font-size:15px;color:lightblue'>Hasta: </p>";
echo "<input id='hasta' style='position:absolute;left:290px;top:160px' type='date' value=".$hasta.">";






$tabla="nota";
$query="SELECT * FROM nota,notero where notero.id_notero=nota.id_notero ORDER BY  f_nota DESC limit 10";
//$result=mysqli_query($conexion,"SELECT nota.titulo,notero.nom bre FROM nota,notero where notero.id_notero=nota.id_notero");
//if($row=mysqli_fetch_assoc($result)){
   //Guardo los datos de la BD en las variables de php
   //$num = $row['nombre'];
   //}
///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['nota']))
{
	$q=$conexion->real_escape_string($_POST['nota']);
	$query="SELECT * FROM nota,notero,programas WHERE 
	    (notero.id_notero=nota.id_notero) and (programas.id_prog=nota.id_prog) and (nota.f_nota>='$desde' and nota.f_nota<='$hasta') and
		(nota.f_nota LIKE '%".$q."%' OR
		nota.titulo LIKE '%".$q."%' OR
		notero.nombre LIKE '%" .$q."%' OR
		nota.entrevistado LIKE '%".$q."%' OR
		nota.cargo LIKE '%".$q."%' OR
		nota.descripcion LIKE '%".$q."%' OR
		nota.f_sal1 LIKE '%".$q."%' OR
		nota.f_sal2 LIKE '%".$q."%' OR
		programas.nombre LIKE '%".$q."%')";
}

$buscarnota=$conexion->query($query);
if ($buscarnota->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
		
			<td>NOTA</td>
			<td>TITULO</td>
			<td>NOTERO</td>
			<td>ENTREVISTADO</td>
			<td>CARGO</td>
			<td>DESCRIPCION</td>
			<td>OBSERVACIONES</td>
			<td>PRIMERA EDICION</td>
			<td>EDICION CENTRAL</td>
			<td>PROGRAMA</td>    
			<td>PUBLICAR</td>
			<td><span class="glyphicon glyphicon-refresh"></span></td>
			<td><span class="glyphicon glyphicon-remove-circle"></span></td>
		
		</tr>';


	while($filanota= $buscarnota->fetch_assoc())
	{   
       list ($anox,$mesx,$diax)=explode ("-",$filanota['f_nota']);
       $f_nota2=[$diax,$mesx,$anox];
       list ($anox1,$mesx1,$diax1)=explode ("-",$filanota['f_sal1']);
       $f_sal1=[$diax1,$mesx1,$anox1];
       list ($anox2,$mesx2,$diax2)=explode ("-",$filanota['f_sal2']);
       $f_sal2=[$diax2,$mesx2,$anox2];

     $timeActual= time();   // Obtenemos el timestamp del momento actual
     $timeVencimiento = strtotime($filanota['f_nota']); // Obtenemos timestamp de la fecha de vencimiento
    // Calculamos el número de segundos que tienen esos 3 días
  $segundos = 1 * 24 * 60 * 60;
    // Condición: Si la diferencia entre la fecha de vencimiento y la fecha actual es menor de 3 días
        if( $timeActual-$timeVencimiento > $segundos or date("Y-m-d")==$filanota['f_nota']) {
		$tabla.=
		'<tr>
			<td style=background-color:white>'.$f_nota2=$diax.'-'.$mesx.'-'.$anox.'</td>';
		}
		else
		{
			$tabla.=
		'<tr>
			<td style=background-color:tomato>'.$f_nota2=$diax.'-'.$mesx.'-'.$anox.'</td>';
		}
			$result2 = mysqli_query($conexion,"SELECT nombre FROM programas WHERE id_prog='$filanota[id_prog]'");
if($row2 = mysqli_fetch_assoc($result2)){
   //Guardo los datos de la BD en las variables de php
   $var2 = $row2["nombre"];
}

$result3 = mysqli_query($conexion,"SELECT nombre FROM notero WHERE id_notero='$filanota[id_notero]'");
if($row3 = mysqli_fetch_assoc($result3)){
   //Guardo los datos de la BD en las variables de php
   $var3 = $row3["nombre"];
}


			$tabla.='
			<td>'.$filanota['titulo'].'</td>
			<td>'.$var3.'</td>
			<td>'.$filanota['entrevistado'].'</td>
			<td>'.$filanota['cargo'].'</td>
			<td>'.$filanota['descripcion'].'</td>
			<td>'.$filanota['observaciones'].'</td>
			<td>'.$f_sal1=$diax1.'-'.$mesx1.'-'.$anox1.'</td>
			<td>'.$f_sal2=$diax2.'-'.$mesx2.'-'.$anox2.'</td>
			<td>'.$var2.'</td>';
			if($filanota['publicar']==1){
				$tabla.='<td>
            Publicado
            </td>';
			}else
			{
				$tabla.='<td>
            <a type=button href=pag.php?pub='.$filanota['id_nota'].'> Publicar</a>
            </td>';
			}
			if($var1==$filanota['id_usuario'] or $usuario=='Alejandra'){
            $tabla.='<td><form method=post action=modifica2.php>
			<input type=hidden name=entrevistado value='.$filanota['id_nota'].'>
			<button type="submit" class="btn btn-danger btn-sm active"><span class="glyphicon glyphicon-refresh"></span> </button>
			</form></td>
			<td><form method=post action=borrar2.php>
			<input type=hidden name=idnota value='.$filanota['id_nota'].'>
			<button type="submit" class="btn btn-danger btn-sm active"><span class="glyphicon glyphicon-remove-circle"></span> </button>
			</form></td>
			
		 </tr>';}
		
		}
	
			$tabla.='</table>';
} else
	{
		$tabla="<h3>No se encontraron coincidencias con sus criterios de búsqueda.</h3>";
	}


echo $tabla;
?>
