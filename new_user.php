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
		<form  class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from" >
			<h2 style="color:#000000;"><i class="fa fa-user-plus" aria-hidden="true" style="color:#000000;" ></i > CREAR NUEVA CUENTA DE USUARIO</h2>
			<br>
			<table cellpadding='10' style="color:#000000;">
				<strong  style="color:#000000;">   INTRODUZCA LOS DATOS DE INICIO DE SESIÓN</strong>
				<tr>
					<td style="color:#000000;">Introduzca un nombre de usuario válido  </td>
					<td><input type="text" name="username" required><br><br></td>
				</tr>
				<tr>
					<td style="color:#000000;">Introduzca la contraseña deseada  </td>
					<td><input type="password" name="password" required><br><br></td>
				</tr>
				<tr>
					<td style="color:#000000;">Introduzca su ID de correo electrónico</td>
					<td><input type="text" name="email" required><br><br></td>
				</tr>
			</table>
			<br>
			<table cellpadding='10'>
				<strong style="color:#000000;">INTRODUZCA LOS DATOS PERSONALES DEL CLIENTE</strong>
				<tr>
					<tdstyle="color:#000000;">Introduzca su nombre  </td>
					<td><input type="text" name="name" required><br><br></td>
				</tr>
				<tr>
					<td style="color:#000000;">Introduzca su teléfono no.</td>
					<td><input type="text" name="phone_no" required><br><br></td>
				</tr>
				<tr>
					<td style="color:#000000;">Introduzca su dirección</td>
					<td><input type="text" name="address" required><br><br></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Registrar" name="Submit">
			<br>
		</form>
	</body>
</html>