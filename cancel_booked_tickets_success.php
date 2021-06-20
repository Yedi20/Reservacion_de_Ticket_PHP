<?php
	session_start();
?>
<html>
	<head>
		<title>
		Cancelar entradas reservadas
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
    			margin: 0px 68px
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
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Panel</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> Nosotros</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contactanos</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesión</a></li>
			</ul>
		</div>
		<h2>CANCELAR ENTRADAS RESERVADAS</h2>
		<h3 style='padding-left: 40px;'>Su boleto ha sido cancelado con éxito.<br><br>Su cantidad de &#x20b9; <?php echo $_SESSION['refund_amount']?> será reembolsado a su cuenta bancaria (Se ha deducido el cargo por cancelación del 15% del importe de su boleto).</td>
		</h3>
		<br>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS
		-->
	</body>
</html>