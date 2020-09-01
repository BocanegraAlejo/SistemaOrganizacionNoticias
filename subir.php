<?php
//creamos la sesión
session_start();
//validamos si se ha hecho o no el inicio de sesión correctamente
//si no se ha hecho la sesión nos regresará a index.php
if(!isset($_SESSION['nombre'])) 
{
  header('Location: index.php'); 
  exit();
}
?>
<!DOCTYPE html>

<html >
<head>
  <meta charset="UTF-8">
  <title>CARGAR NOTICIAS</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Open+Sans);
.btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
.btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
.btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
.btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
.btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
.btn-primary.active { color: rgba(255, 255, 255, 0.75); }
.btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
.btn-block { width: 100%; display:block; }

* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 100%; height:100%; }

body {
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: rgba(147,206,222,1);
background: -moz-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(82,151,170,1) 24%, rgba(9,90,112,1) 51%, rgba(56,145,170,1) 87%, rgba(73,165,191,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(147,206,222,1)), color-stop(24%, rgba(82,151,170,1)), color-stop(51%, rgba(9,90,112,1)), color-stop(87%, rgba(56,145,170,1)), color-stop(100%, rgba(73,165,191,1)));
background: -webkit-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(82,151,170,1) 24%, rgba(9,90,112,1) 51%, rgba(56,145,170,1) 87%, rgba(73,165,191,1) 100%);
background: -o-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(82,151,170,1) 24%, rgba(9,90,112,1) 51%, rgba(56,145,170,1) 87%, rgba(73,165,191,1) 100%);
background: -ms-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(82,151,170,1) 24%, rgba(9,90,112,1) 51%, rgba(56,145,170,1) 87%, rgba(73,165,191,1) 100%);
background: linear-gradient(to right, rgba(147,206,222,1) 0%, rgba(82,151,170,1) 24%, rgba(9,90,112,1) 51%, rgba(56,145,170,1) 87%, rgba(73,165,191,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#93cede', endColorstr='#49a5bf', GradientType=1 );
}
.login { 
	position: absolute;
	top: 3%;
	left: 50%;
	margin: 110px 0 0 -150px;
	width:300px;
	height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }
h2 {
	font-family: sans-serif;
	color:lightblue;
	text-align: center;
	font-size: 40px;
}

input, textarea, select { 
	width: 100%;
	height: 100%;
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

<h2>SUBIR NOTICIAS</h2>
  <div class="login">
    <form method="post" action="subir2.php">
    	FECHA INICIO:
    		<input type="date" name="f_inicio" placeholder="" required="required" />
    	TITULO:
    		<input type="text" name="titulo" placeholder="Titulo.." required="required" />
    	NOTERO:
    		<?php
			include ('conexion.php');
			$resultado_consulta_mysql=mysqli_query($conexion,"SELECT nombre FROM notero");
			?>
    		<select name="notero">
			<?php
			while ($lista=mysqli_fetch_array($resultado_consulta_mysql)){
			echo "<option value='$lista[nombre]'>".$lista['nombre']. "</option>";
			}
			?>
			</select>

 		ENTREVISTADO:
    		<input type="text" name="entrevistado" placeholder="Entrevistado.." required="required" />
    	CARGO:
    		<input type="text" name="cargo" placeholder="Cargo.." required="required" />
    	DESCRIPCION:
    	<textarea cols="50" rows="4" name="descripcion" placeholder="Descripcion.." required>
		</textarea>
		OBSERVACIONES:
		<textarea cols="50" rows="4" name="observaciones" placeholder="Observaciones.." required>
		</textarea>
        FECHA SALIDA 1:
        <input type="date" name="f_salida1" placeholder="" required="required" />
        FECHA SALIDA 2:
        <input type="date" name="f_salida2" placeholder="" required="required" />
        <br>
        	Programa:
    		<?php
			include ('conexion.php');
			$resultado_consulta_mysql=mysqli_query($conexion,"SELECT nombre FROM programas");
			?>
    		<select name="prog">
			<?php
			while ($lista=mysqli_fetch_array($resultado_consulta_mysql)){
			echo "<option value='$lista[nombre]'>".$lista['nombre']. "</option>";
			}
			?>
			</select>
        <br>
        <button type="submit" class="btn btn-primary btn-block btn-large">SUBIR</button>
    </form>
</div>
  
    <script src="js/index.js"></script>

<?php
$usuario=$_SESSION['nombre'];
if ($usuario=='Alejandra'){
	echo "<a href='info.php' style='position:absolute;left:0px;top:0px;text-decoration:none;font-family:arial' type='button' class='btn btn-default'><<<</a>";
}
else
	{
			echo "<a href='info2.php' style='position:absolute;left:0px;top:0px;text-decoration:none;font-family:arial' type='button' class='btn btn-default'><<<</a>";
	}
	?>

</body>
</html>
