
<?php

if ($_SERVER['PHP_AUTH_USER']!="rosa.azpilcueta" || $_SERVER['PHP_AUTH_PW']!="123pepita123"){
	header('WWW-Authenticate: Basic realm="Ingrese su usario y contraseña asignada"');
	header('HTTP/1.0 401 Unauthorized');
	echo 'Authorization Required To Server.';	
	echo '<html>
			
			<form action="estadia.php">
				<input type="submit" value="volver"> 
			</form>
		  </html>';
	exit;
}

?>

<html>
	<!--cabecera-->
	<head>
		<title>Apartaments &amp; Rooms Helena</title>
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
			function capturarNombre(){
				var nombreid=document.getElementById("nombreReserva").value;
				return nombreid;
			};

			function capturarApellido(){
				var apellidoid=document.getElementById("apellidoReserva").value;
				return apellidoid;
			};

			function capturarTelefono(){
				var telefonoid=document.getElementById("telefonoReserva").value;
				return telefonoid;
			};

			function capturarEntradaReserva(){
				var entradareservaid=document.getElementById("entradaReserva").value;
				return entradareservaid;
			};

			function capturarSalidaReserva(){
				var salidareservaid=document.getElementById("salidaReserva").value;
				return salidareservaid;
			};

			function mostrarValoresReserva(){
				var seleccion = document.getElementById("tipohabitacionReserva").value; //VARIABLE DE SELECCION DE HABITACIÓN EN COMBOBOX
				if(capturarEntradaReserva() == "" || capturarSalidaReserva() == ""){
					alert("Seleccionar fecha de entrada y fecha de salida de la reserva");
				}
				else{
					alert("Nombre: "+capturarNombre()+" Apellido: "+capturarApellido()+" Telefono: "+capturarTelefono()+" Enetrada: "+capturarEntradaReserva()+"  Salida: "+capturarSalidaReserva()+"  Habitación: "+seleccion);
				}
			}


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
				<li> <a href="mostrarReserva.php" id="mostrarReservas">Mostrar reservas</a> </li>
			</ul>
			

			<section id="contenido">
				<h1 class="titulopagina"> Buen día, agregar reserva: </h1>
				<article class="cajas">
					<div id="cajaagregar">
						<form action="#" method="post">
							<?php
								include("conexion.php"); //PARA COMPROBAR QUE SE ESTÁS JALANDO LOS DATOS DE LA BD DE ACUERDO A LA SELECCION
								$con = new conectar(); 
								if( $con->conectardatos() && isset($_POST['tipohabitacionReserva'])){ //VERIFICO CON ISSET SI LA VARIABLE ESTÁ DEFINIDA :D
									$con->insertarReserva($_POST['nombreReserva'],$_POST['apellidoReserva'],$_POST['telefonoReserva'],$_POST['entradaReserva'],$_POST['salidaReserva'],$_POST['tipohabitacionReserva']);
								}
							?>		

							Nombres <input type="text" id="nombreReserva" name="nombreReserva" value=""><br><br>
							Apellidos <input type="text" id="apellidoReserva" name="apellidoReserva" value=""><br><br>
							Telefono <input type="text" id="telefonoReserva" name="telefonoReserva" value=""><br><br>
							Entrada <input type="text" id="entradaReserva" name="entradaReserva" class="tcal" value=""><br><br>
							Salida <input type="text" id="salidaReserva" name="salidaReserva" class="tcal" value=""><br><br>

							Tipo de habitación
					
							<select name="tipohabitacionReserva" id="tipohabitacionReserva">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select><br><br>
							
							<input type="submit" value="Agregar" onclick="mostrarValoresReserva()">

						</form>
					</div>

					<div id="cajatipohabitacionesagregar">

						<h1>1.Habitación individual estandar</h1>
						<h1>2.Habitacion individual económica</h1>
						<h1>3.Habitación doble</h1>
						<h1>4.Habitación doble - 2 camas</h1>
						<h1>5.Habitación doble económica</h1>
						<h1>6.Habitación doble ecócómica - 2 camas</h1>
						<h1>7.Apartamento de 2 dormitorios</h1>
						<h1>8.Apartamento de 6 adultos</h1>
						<h1>9.Habitación triple económica</h1>
						<h1>10.Habitación triple estandar</h1>
							
					</div>	

				</article>
			</section>
		</div>
	</body>

</html>





