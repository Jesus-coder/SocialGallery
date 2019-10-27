<?php
   include("connect.php");
   include ("funciones.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      $pass = md5($mypassword);
	  if (isset( $_POST['username'])){
	  
      $sql = "SELECT id FROM users_db WHERE user = '$myusername' and password = '$pass'";
	  
	  $pass = md5($mypassword);
      $result = mysqli_query($conexion,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		  session_start();
         $_SESSION['login_user'] = $myusername;
         
         header("location: home.php");
      }else {
        phpAlert(   'Usuario o contraseña incorrectos'   );
         header('Refresh:0; url = index.php');
      }
	  }
   }
?>