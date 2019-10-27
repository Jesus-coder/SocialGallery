 <!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
 <link rel="stylesheet" href="css/login.css" type="text/css">
 <script type="text/javascript" src="js/codi.js"></script>
 </head>
 <body>

 <form id="login" action="login.proc.php" method="post" onsubmit="return validacion()">
  <div class="imgcontainer2">
    <img src="logos/logo.png" alt="Avatar" class="logo">
  </div>
  <div class="imgcontainer">
    <img src="logos/avatar.png" alt="Avatar" class="avatar">
  </div>
  <p id="mensaje" class="mensaje"></p>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Usuario" name="username" id="username">
    <br>
    <p id="mensajenom" class="mensajenom"></p>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Contraseña" name="password" id="password">
    <br>
    <p id="mensajemail" class="mensajemail"></p>

    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="reset" class="cancelbtn">Cancelar</button>
  </div>
</form> 


 <?php include("login.proc.php");?>
</body>