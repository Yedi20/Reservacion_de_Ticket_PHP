<?php
	session_start();
?>
<html>
	<head>
		<title>
		Reserva de entradas exitosa!
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
    			margin: 0px 127px
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
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Panel</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> Nosotros</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contactanos</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesión</a></li>
			</ul>
		</div>
		<h2>Reserva exitosa!</h2>
		<h3>Su pago de&#x20b9; <?php echo $_SESSION['total_amount']; ?> ha sido recibido.<br><br> Su PNR es <strong><?php echo $_SESSION['pnr'];?></strong>. Su ticket ha sido reservado exitosamente!.</h3>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->

		<footer>
			<?php
			require_once('redessociales.php');
	           ?>
			
		</footer>
	</body>
</html>