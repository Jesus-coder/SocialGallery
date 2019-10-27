<?php
$usuario = "root";
$servidor = "localhost";
$basededatos = "bd_galeria";
$conexion = mysqli_connect( $servidor, $usuario, "", $basededatos ) or die ( "No se ha podido conectar a la base de datos" );

?>