<?php
	session_start();
?>
<html>
	<head>
		<title>
		Ver vuelos disponibles
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
			Security Flash
		</h1>
		<div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Panel</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesión</a></li>
			</ul>
		</div>
		<h3>¡Vaya! Debe iniciar sesión con una cuenta de cliente para reservar entradas</h3>
	
		<footer>
			<?php
			require_once('redessociales.php');
	           ?>
			
		</footer>
	
	</body>
	
</html>