<?php
 require 'Logica/conexion.php';

 session_start();

 if(isset($_GET['cerrar_sesion'])){
   session_unset();

   session_destroy();
 }

 if(isset($_SESSION['rol'])){
   switch ($_SESSION['rol']) {
     case '1':
       header('location: admin.php');
       break;

     case '2':
       header('location: camarera.php');
       break;

     case '3':
       header('location: camarera.php');
       break;

     default:
   }
 }

 if(isset($_POST['username']) && isset($_POST['password'])){
   $username= $_POST['username'];
   $password= $_POST['password'];

   $db = new Database();
   $query = $db->connect()->prepare('SELECT * FROM usuario WHERE username = :username AND password = :password');
   $query->execute(['username' => $username, 'password' => $password]);

   $row = $query->fetch(PDO::FETCH_NUM);
   if(row == true){
     $rol = $row[3];
     $_SESSION['rol'] = $rol;
     switch ($_SESSION['rol']) {
       case '1':
         header('location: admin.php');
         break;

       case '2':
         header('location: camarera.php');
         break;

       case '3':
         header('location: camarera.php');
         break;

       default:
     }
   }else {
     echo "Verifique el nombre de usuario o la contraseña";
   }
 }


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/todo.svg">
		</div>
		<div class="login-content">
			<form action="#" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">L-Control</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name= "username" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
