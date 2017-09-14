<html>
	<!--cabecera-->
	<head>
		<title>Apartments &amp; Rooms Helena</title>
		<meta content="charset="UTF-8"">     
		

		<link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon" />
		<link href="tcal.css" rel="stylesheet" type="text/css">
		<link href="estilos.css" rel="stylesheet" type="text/css">
		<link href="estilosEstadia.css" rel="stylesheet" type="text/css">
		<link href="style.css" rel="stylesheet" type="text/css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<script type="text/javascript" src="tcal.js"></script>


		<script type="text/javascript">
		//FUNCIONES
		</script>
	</head>


	<body id="contenedor">
		<div>
			<!--cabecera-->
			<header id="cabecera">
				<div id="logo">
					<center>
						<img src="imagenes/logo.png">
					</center>
				</div>
			</header>

			<!--menu-->

			<ul class="menu" style="margin-bottom:0;">
				<li> <a href="index.html" id="home"> <span><i class="icon icon-home3"></i></span> Home</a> </li>
				<li> <a href="agregarReserva.php" id="agregarReserva">Volver</a> </li>
			</ul>
			

			<section id="contenido">
				<table>
					<tr>
						<th>Numero de reserva</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Telefono</th>
						<th>Entrada</th>
						<th>Salida</th>
						<th>Habitación</th>
					</tr>
					<?php
						include("conexion.php");
						$con = new conectar();
						$con->conectardatos();
						$con->mostrarReservas();
					?>
				</table>
			</section>
		</div>
	</body>

</html>





