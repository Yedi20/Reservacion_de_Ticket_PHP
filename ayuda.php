<?php
	session_start();
?>
<html>
	<header id="main-header">
		<title>
			Bienvenido/as a Security Flash
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<a class="navbar-brand" href="#">

            <a id="logo-header" href="#">
			<span class="site-name">Reservaciones de viajes</span>
			<span class="site-desc">Con su tcket / Destino/ y mas</span>
		</a> <!-- / #logo-header -->
		<img id="logo-header" src="images/escudo.png" style="float: right;
                                                            object-fit: cover;
                                                            width: 70px;
                                                            padding: 10px;">
            </a>
	</head>
    
	<body>
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
                        
		<img class="logo" src="images/shutterstock_1.jpg"/> 
		<h1 id="title">
		Security Flash
		</h1>
		
		
			
		<div class="content">
          
			<h3>Aqui puedes hablar con nuestro agente! </h3>
			<iframe
				allow="microphone;"
				width="350"
				height="430"
				src="https://console.dialogflow.com/api-client/demo/embedded/aa42a07a-0bbe-4690-867c-56c5603c2c70">
			</iframe>
		</div>
		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->

		<footer>
            <img src="images/shutterstock_390581569.jpg" width=100%>
            </footer>
	</body>
</html>