<html>
	<!--cabecera-->
	<head>
		<title>Apartments &amp; Rooms Helena</title>
		<meta content="charset="UTF-8"">
			

		<link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon" />
		<link href="tcal.css" rel="stylesheet" type="text/css">
		<link href="estilos.css" rel="stylesheet" type="text/css">
		<link href="estilosGaleria.css" rel="stylesheet" type="text/css">
		<link href="estilosEstadia.css" rel="stylesheet" type="text/css">
		<link href="style.css" rel="stylesheet" type="text/css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<script type="text/javascript" src="tcal.js"></script>

		<script>

			function capturarEntrada(){
				var entradaid=document.getElementById("entrada").value;
				return entradaid;
			};

			function capturarSalida(){
				var salidaid=document.getElementById("salida").value;
				return salidaid;
			};

			function mostrarValores(){
				var seleccion = document.getElementById("tipohabitacion").value; //VARIABLE DE SELECCION DE HABITACIÓN EN COMBOBOX
				if(capturarEntrada() == "" || capturarSalida() == ""){
					alert("Seleccionar fecha de entrada y fecha de salida.");
				}
				else{
					alert("Fecha de entrada: "+capturarEntrada()+"  Fecha de salida: "+capturarSalida()+"  Habitación: "+seleccion);
				}
			}
			
		</script>


	</head>

	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FbbHelena%2F&amp;tabs&amp;width=200&amp;height=50&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=false&amp;appId" width="200" height="100" style="border:none;overflow:hidden;position:absolute; top:0; left:0;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	


	
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

			<ul class="menu">
				<li> <a href="index.html" id="home"> <span><i class="icon icon-home3"></i></span> Home</a> </li>
				<li> <a href="servicios.html" id="servicios"> <span><i class="icon icon-newspaper"></i></span> Services</a> 
					 <ul>
					 	<li><a href="estadia.php" id="estadia">Estadía</a></li>
					 	<li><a href="excursiones.html" id="excursiones">Excursiones</a></li>
					 </ul>
				</li>
				<li> <a href="galeria.html" id="galeria"> <span><i class="icon icon-images"></i></span> Galery</a> </li>
				<li> <a href="ubicacion.html" id="ubicacion"> <span><i class="icon icon-location"></i></span> Location</a> </li>
				<li> <a href="contacto.html" id="contacto"> <span><i class="icon icon-user"></i></span> Contact</a> </li>
				<li> <a href="acercade.html" id="acercade"> <span><i class="icon icon-notification"></i></span> About</a> </li>
			</ul>
			

			<section id="contenido">
			<h1 class="titulopagina"> Nuestras habitaciones </h1>

			<article class="cajas">
					 
			
					<div id="cajareserva">
						<form action="estadia.php" method="post">
							<?php
								include("conexion.php"); //PARA COMPROBAR QUE SE ESTÁS JALANDO LOS DATOS DE LA BD DE ACUERDO A LA SELECCION
								$con = new conectar(); 
								if( $con->conectardatos() && isset($_POST['tipohabitacion'])){ //VERIFICO CON ISSET SI LA VARIABLE ESTÁ DEFINIDA :D
									$con->reservas($_POST['tipohabitacion'],$_POST['entrada'],$_POST['salida']);
								}
							?>
							Entrada <input type="text" id="entrada" name="entrada" class="tcal" value="">
							&nbsp;&nbsp;Salida <input type="text" id="salida" name="salida" class="tcal" value="">

							&nbsp;&nbsp;&nbsp;&nbsp;Tipo de habitaci&oacute;n
					
							<select name="tipohabitacion" id="tipohabitacion">
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
							</select>
							
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="submit" value="Ver disponibilidad" onclick="mostrarValores()">
							
						</form>


					</div>

					<div id="cajatipohabitaciones">

						<div class="cajatipos">
							<h2>1. Habitaci&oacute;n individual estandar</h2><br>
							<ul class="galeriaestadia">
								<li> <a href="#"><img src="tipoindividual/indestandar1.jpg"></a> </li>
								<li> <a href="#"><img src="tipoindividual/indestandar2.jpg"></a> </li>
								<li> <a href="#"><img src="tipoindividual/indestandar3.jpg"></a> </li>
							</ul>
						</div>

						<div class="cajatipos">
							<h2>2. Habitaci&oacute;n individual econ&oacute;mica</h2><br>
							<ul class="galeriaestadia">
								<li> <a href="#"><img src="tipoindividual/indeconomica1.jpg"></a> </li>
								<li> <a href="#"><img src="tipoindividual/indeconomica2.jpg"></a> </li>
								<li> <a href="#"><img src="tipoindividual/indeconomica3.jpg"></a> </li>
							</ul>
						</div>

						<div class="cajatipos">
							<h2>3. Habitaci&oacute;n doble</h2><br>
							<ul class="galeriaestadia">
								<li> <a href="#"><img src="tipodoble/doble1.jpg"></a> </li>
								<li> <a href="#"><img src="tipodoble/doble2.jpg"></a> </li>
								<li> <a href="#"><img src="tipodoble/doble3.jpg"></a> </li>
							</ul>
						</div>

						<div class="cajatipos">
							<h2>4. Habitaci&oacute;n doble - 2 camas</h2><br>
							<ul class="galeriaestadia">
								<li> <a href="#"><img src="tipodoble/doble2camas.jpg"></a> </li>
								<li> <a href="#"><img src="tipodoble/doble2camas2.jpg"></a> </li>
								<li> <a href="#"><img src="tipodoble/dobleeconomica.jpg"></a> </li>
							</ul>
						</div>
 
						<div class="cajatipos">
							<h2>5. Habitaci&oacute;n doble econ&oacute;mica</h2><br>
							<ul class="galeriaestadia">
								<li> <a href="#"><img src="tipodoble/dobleeconomica.jpg"></a> </li>
								<li> <a href="#"><img src="tipodoble/dobleeconomica2.jpg"></a> </li>
								<li> <a href="#"><img src="tipodoble/dobleeconomica3.JPG"></a> </li>
							</ul>
						</div>

						<div class="cajatipos">
							<h2>6. Habitaci&oacute;n doble econ&oacute;mica - 2 camas</h2><br>
							<ul class="galeriaestadia">
								<li> <a href="#"><img src="tipodoble/doble2camaseconomica.jpg"></a> </li>
								<li> <a href="#"><img src="tipodoble/doble2camaseconomica2.jpg"></a></li>
								<li> <a href="#"><img src="tipodoble/doble2camaseconomica3.jpg"></a> </li>
							</ul>
						</div>

						<div class="cajatipos">
							<h2>7. Apartamento de 2 dormitorios</h2><br>
							<ul class="galeriaestadia">
								<li> <a href="#"><img src="tipoapartamento/apa2dormitorios.jpg"></a> </li>
								<li> <a href="#"><img src="tipoapartamento/apa2dormitorios2.jpg"></a> </li>
								<li> <a href="#"><img src="tipoapartamento/apa2dormitorios3.jpg"></a> </li>
							</ul>
						</div>
						
						<div class="cajatipos">
							<h2>8. Apartamento de 6 adultos</h2><br>
							<ul class="galeriaestadia">
								<li> <a href="#"><img src="tipoapartamento/apa6adultos.jpg"></a> </li>
								<li> <a href="#"><img src="tipoapartamento/apa6adultos2.jpg"></a> </li>
								<li> <a href="#"><img src="tipoapartamento/apa6adultos3.jpg"></a> </li>
							</ul>
						</div>
						
						<div class="cajatipos">
							<h2>9. Habitaci&oacute;n triple econ&oacute;mica</h2><br>
							<ul class="galeriaestadia">
								<li> <a href="#"><img src="tipotriple/trieconomica1.jpg"></a> </li>
								<li> <a href="#"><img src="tipotriple/trieconomica2.jpg"></a> </li>
								<li> <a href="#"><img src="tipotriple/trieconomica3.jpg"></a> </li>
							</ul>
						</div>
						
						<div class="cajatipos">
							<h2>10. Habitaci&oacute;n triple estandar</h2><br>
							<ul class="galeriaestadia">
								<li> <a href="#"><img src="tipotriple/triestandar.jpg"></a> </li>
								<li> <a href="#"><img src="tipotriple/triestandar2.jpg"></a> </li>
								<li> <a href="#"><img src="tipotriple/triestandar3.jpg"></a> </li>
							</ul>
						</div>		
					</div>

			</article>
			</section>
		</div>
	</body>

</html>





