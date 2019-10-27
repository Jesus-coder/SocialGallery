<!DOCTYPE html>
<HTML>
<HEAD> 
<link rel="stylesheet" href="css/form.css" type="text/css">
<script type="text/javascript" src="js/codi.js"></script>
<!--<script src="lib/jquery-2.1.3.min.js" type="text/javascript"></script>-->
 </HEAD>

<BODY bgcolor= 'grey'>
  
	<div>
		<form action = "insert.php" method="post" enctype="multipart/form-data" onsubmit="return formGaleria()"> 
			<h2 class="margin">Subir nueva imagen</h2>	
			<p id="mensajeg" class="mensajeg"></p>
			<label for="name">Nombre</label>	
			<input type="text" name="nombre_imagen" placeholder="Nombre de imagen"  id="nombre_imagen">
			<br>
			<p id="mensajetitulo" class="mensajetitulo"></p>
			<label for="name">Imagen</label>
			<input type="file" name="file" id="file">
			<br>
			<p id="mensajefile" class="mensajefile"></p>	
			<button class= "btn" type="submit" name="save">Subir imagen</button>
		</form>	
	</div>
	<?PHP
	include "insert.php";
	?>
</BODY>
</HTML>