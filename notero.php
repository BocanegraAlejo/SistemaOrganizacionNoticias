<html>
<head>
<title>Registrar noteros</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style>
body {
 /* Color alternativo para versiones que no soporten degradados */  
  background-color:#2B93D2;  
  
  /* Safari 4+ y Chrome 1+ */  
  background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #2B93D2), color-stop(1, #77BCE6));  
  
  /* Safari 5.1+ y Chrome 10+ */  
  background-image:-webkit-linear-gradient(#2B93D2, #77BCE6);  
  
  /* Firefox 3.6+ */  
  background-image:-moz-linear-gradient(top, #2B93D2, #77BCE6);  
  
  /* Opera 11.10+ */  
  background-image:-o-linear-gradient(top, #2B93D2, #77BCE6);  
  
  /* Internet Explorer 5.5+ */  
  filter:progid:DXImageTransform.Microsoft.gradient(startColorStr='#2B93D2', EndColorStr='#77BCE6');  
}  
}
input, textarea, select { 
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
h2 {
	font-size: 50px;
	font-family: fantasy;
	color: black;
}
h3 {
	color: #00ff00;
	font-size: 35px;
}
h4 {
	color: black;
	font-family: sans-serif;
	font-size: 20px;
}
h5 {
	font-family: sans-serif;
	font-weight: bold;

}
.btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
.btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
.btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
.btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
.btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
.btn-primary.active { color: rgba(255, 255, 255, 0.75); }
.btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
.btn-block {  display:block; }
html {
margin: 0px;
padding: 0px;
}

.loginbox {
border-radius: 4px;
box-shadow: 0px 2px 10px #d6d6d6;
margin: 20px auto;
width: 320px;
height: 190px;
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
<h2>REGISTRO DE NOTEROS</h2>
<div class="jumbotron container loginbox">
<form method="post" action="notero2.php">
<h5>NOTERO:</h5>
<input type="text" name="notero" required>
<br>
<br>
<button type="submit" class="btn btn-primary">REGISTRAR</button>
</form>
</div>
<?php
	echo "<a href='info.php' style='position:absolute;left:0px;top:0px;text-decoration:none;font-family:arial' type='button' class='btn btn-default'><<<</a>";
		?>

</body>
</html>
