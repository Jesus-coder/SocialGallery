<?php
session_start(); //usar la misma sesión
session_destroy(); //destruir session
header("Location: index.php");
?>