<?php
	session_start();
?>
<html>
	<head>
		<title>
			Bienvenido a Security Flash.
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<a class="navbar-brand" href="#">
		<img src="images/escudo.png" style="float: right;
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
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Reservar entradas</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Reservar entradas</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Reservar entradas</a>";
						}
					?>
				</li>
				<li><a href="nosotros.php"><i style="color:#FF0000;" class="fa fa-plane" aria-hidden="true"></i> Nosotros</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contactanos</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Iniciar sesión</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Iniciar sesión</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Iniciar sesión</a>";
						}
					?>
				</li>
			</ul>
		</div>
		<div class="container">
			<div class="welcome_text">Bienvenido/as a Security Flash!</div>
			<img src="images/shutterstock_1.jpg" width=100%>
		</div>
		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->



		<footer>
			<?php
			require_once('redessociales.php');

	           ?>
			
		</footer>

		
	</body>
</html>