<html>
<head>
<title> Registrar usuarios </title>
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
html {
margin: 0px;
padding: 0px;
}

.loginbox {
border-radius: 4px;
box-shadow: 0px 2px 10px #d6d6d6;
margin: 20px auto;
width: 320px;
height: 280px;
-webki-border-radius: 4px;
-moz-border-radius: 4px;
}

input[type=”submit”]{
margin-top: 10px;
margin-left: 120px;
}

</style>
</head>
<body>

<center>
<h2>REGISTRO DE USUARIOS</h2>
<br>
<br>
<div class=" container jumbotron loginbox">
<form method="post" action="regist2.php">
<label>USUARIO:</label>
<input type="text" class="form-control" name="usuario" required>
<br>
<label>CLAVE:</label>
<input type="password" class="form-control" name="clave" required>
<br>
<input type="submit" class="btn btn-success" value="REGISTRAR">
</form>
</div>
<?php
	echo "<a href='info.php' style='position:absolute;left:0px;top:0px;text-decoration:none;font-family:arial' type='button' class='btn btn-default'><<<</a>";
	?>
</body>
</html>