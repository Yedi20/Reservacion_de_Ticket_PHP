<?php
	session_start();
?>
<html>
	<head>
		<title>
		Inicio de sesión de la cuenta
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
    			margin: 0px 60px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">

		<img id="logo-header" src="images/escudo.png" style="float: right;
                                                            object-fit: cover;
                                                            width: 70px;
                                                            padding: 10px;">
            </a>
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
		<br>
		<br>
		<form class="float_form" style="padding-left: 40px" action="login_handler.php" method="POST">
			<fieldset>
				<legend  style="color:#000000;">Detalles de inicio de sesión:-</legend>
				<strong  style="color:#000000;">nombre de usuario:</strong><br>
				<input type="text" name="username" placeholder="Enter your username" required><br><br>
				<strong  style="color:#000000;">contraseña:</strong><br>
				<input type="password" name="password" placeholder="Enter your password" required><br><br>
				<strong  style="color:#000000;">Tipo de usuario:</strong  style="color:#000000;"><br>
				Cliente <input type='radio' name='user_type' value='Customer'  style="color:#000000;" checked/> Administrador <input type='radio' name='user_type' value='Administrator'/>
				<br>
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>
				<input type="submit" name="Login" value="Login">
			</fieldset>
			<br>
			<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Crear nueva cuenta de usuario?</a>
		</form>
	</body>
</html>