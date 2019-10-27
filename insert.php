<?php
include("connect.php");
include ("funciones.php"); 
	if(isset($_POST['save'])){
		session_start(); //recuperamos la sesion
		$usuario = $_SESSION['login_user']; 
		// obtenemos el nombre de la imagen
		$nombre_imagen=$_POST['nombre_imagen'];
		$name_file = $_FILES['file']['name'];
		$tmp_name = $_FILES ['file']['tmp_name'];
		//miramos si existe el directorio del usuario, si no lo crea
		if(is_dir('imagenes/'.$usuario)) {
  			
		} else {
 		 	mkdir("imagenes/".$usuario);
		}
		//indicamos el directorio local donde irá
		$local_image = 'imagenes/'.$usuario.'/';
		//fecha actual
		$fecha = date('Y-m-d');
		//copiamos la imagen en el directorio local
		move_uploaded_file($tmp_name, $local_image.$name_file);
		//obtiene el tamaño del fichero
		$fsize = filesize ("$local_image$name_file");
		//lo convertimos a MB con la funcion conversor
		$size = conversor($fsize, 'M', 2);
		//ruta que introducimos en la BD
		$ruta = $local_image.$name_file;
		//obtenemos su extension
		$partes_ruta = pathinfo("$ruta");
		$ext=$partes_ruta['extension'];
		//$exten = implode(",", $ext);
		//creamos un filtro que comprueba si en la ruta ya existe el nombre del fichero
		$result ="SELECT ruta FROM tbl_imagenes WHERE ruta LIKE '%/$name_file' and id_user = (SELECT `id` FROM `users_db` WHERE `user`='".$usuario."')";
		//ejecutamos la query
		$query=mysqli_query($conexion,$result);
		//comprobamos si el formato es compatible
		if($ext == 'jpg'|| $ext == 'png' || $ext == 'jpeg' || $ext == 'gif') {
			//comprobamos si la imagen es menor a 5MB
			if ($size < 5){
				//y luego si la imagen ya existe en la ruta
				if (mysqli_num_rows($query) == 0){
					$sql = "INSERT INTO tbl_imagenes (nombre_imagen, fecha, ruta, size, id_user)
					VALUES ('".$nombre_imagen."','".$fecha."','".$ruta."',$size, (SELECT `id` FROM `users_db` WHERE `user`='".$_SESSION['login_user']."'))";
					$sql_query=mysqli_query($conexion, $sql);
					header('Location: home.php');
				}
				else {
					//alert para avisar de la existencia de la imagen y redirección
					phpAlert(   'La imagen ya existe en la galeria'   );
					header('Refresh:0; url = home.php');
				}
			}else{
				//alert para avisar del peso de la imagen y redirección
				phpAlert(   'La imagen debe ser menor de 5MB'   );
				header('Refresh:0; url = home.php');
			}	
		
			//header('Location: home.php');
		} else {
			//alert para avisar del formato de la imagen y redirección
			phpAlert(   'Formato '.$ext.' incompatible\\n\\inserta un archivo: jpg, jpeg, png o gif'   );
			header('Refresh:0; url = home.php');
			
		}

	
	} 

?>