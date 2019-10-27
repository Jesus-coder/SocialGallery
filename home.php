<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Isotope - sorting</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/sidebar.css" type="text/css">
    <script src="js/sidebar.js" type="text/javascript"></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
	<script src='https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js'></script>
	<script  src="js/script.js"></script>
</head>
<body>
	<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
		<button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
		<?php
			include("form.php");
		?>
	</div>
	<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
	<div class="head">
		<?php
		include("header.php");
		?>
		<!-- partial:index.partial.html -->
		<div class="title">
			<h1>Galería de imágenes de <?php echo $_SESSION['login_user']; ?></h1>
 		</div>
			<form name="sort" action="" method="post">
			<select name="order">
				<option selected value="title" >Título</option>
				<option value="date">Fecha</option>
				<option value="size">Tamaño</option>
			</select>
			<input class="btn" type="submit" value="Ordenar" />
			</form>
		<?php
		//switch que mediante una variable añade un order by a la consulta
		if (isset($_POST['order'])) {		
		switch( $_POST['order'] ){
		case 'title':
			$orden = ' ORDER BY nombre_imagen';
			break;
		case 'date':
			$orden = ' ORDER BY fecha';
			break;
		case 'size':
			$orden = ' ORDER BY size';
			break;
}
} else {
	$orden = '';
}
?>
		<!--<div class="button-group sort-by-button-group">
		  <button class="button is-checked" data-sort-value="original-order">original order</button>
		  <button class="button" data-sort-value="name">name</button>
		  <button class="button" data-sort-value="symbol">symbol</button>
		  <button class="button" data-sort-value="number">number</button>
		  <button class="button" data-sort-value="filedate">date</button>
		  <button class="button" data-sort-value="weight">weight</button>
		  <button class="button" data-sort-value="category">category</button>
		</div>-->
	</div> 

	<div class="content">
		<div class="grid">
			<?php
			include("connect.php");
			$iduser="Select id from users_db where user = '".$_SESSION['login_user']."'";
			$resultid=mysqli_query($conexion,$iduser);
			$row = mysqli_fetch_array($resultid);
			$idus = $row[0];
			$sqlimg="SELECT * FROM tbl_imagenes where id_user = '".$idus."'$orden";
			$result=mysqli_query($conexion,$sqlimg);
			while($mostrar=mysqli_fetch_array($result)){
				?>
				<div class="element-item transition metal " data-category="transition">
					<a target="_blank" href="<?php echo $mostrar['ruta'] ?>">
						<div class="thumbnail">
						<img src="<?php echo $mostrar['ruta'] ?>" alt="<?php echo $mostrar['nombre_imagen'] ?>">
						</div>

					</a>
						<figcaption>
						  <p class="name"><?php echo $mostrar['nombre_imagen'] ?></p>
						  <p class="file-date"><?php echo $mostrar['fecha'] ?></p>
						  <p class="weight"><?php echo $mostrar['size'] ?> MB</p>

						</figcaption>
				</div>
				<?php
				}
				?>
		</div>
	</div>

</body>
</html>