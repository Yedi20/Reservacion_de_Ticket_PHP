<html>
	<head>
		<title>
		Crear nueva cuenta de usuario
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 135px
			}
		</style>
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
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Reservar entradas</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> Nosotros</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contactanos</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar sesión</a></li>
			</ul>
		</div>
		<br>
		<h3>¡Nuevo usuario registrado correctamente! Inicia sesión en tu cuenta para reservar entradas.</h3>
	
		<footer>
			<?php
			require_once('redessociales.php');
	           ?>
			
		</footer>
	</body>
</html>