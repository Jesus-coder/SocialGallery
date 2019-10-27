 <!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="css/logout.css" type="text/css">
 </head>
 <body>
	<?php
	session_start();
	if (isset ($_SESSION['login_user'])){ 
	echo "<a href='logout.proc.php' class='logouts'> Cerrar sesión de ".$_SESSION['login_user']." </a>&nbsp;&nbsp;";
			}else{
	header("Location: index.php");
	}
	?>
</body>
</html>