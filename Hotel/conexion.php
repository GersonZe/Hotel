<?php

class conectar{	

	public function conectardatos(){
		$host = "mysql.webcindario.com"; //$host = "localhost";
		$user = "aptandrmhelena"; //$user = "root";
		$pw = "chicamaru";
		$db = "aptandrmhelena"; //$db = "dbhotel";
		$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión.");
		mysql_select_db($db,$con) or die ("No se encontró la base de datos.");
		return $con;
	}

	public function reservas($tipohabitacion,$entrada,$salida){
		$fechaentrada = $entrada;
		$fechasalida = $salida;
		$flag = 0;
		$query = "SELECT * FROM Reserva WHERE Habitacion_tipohabitacion = '$tipohabitacion'"; //ASI SE REFERENCIA A UNA VARIABLE PARA INCLUIRLA EN LA CONSULTA .l.
		$resultado = mysql_query($query);
		
		while($fila = mysql_fetch_array($resultado)){		
			$entradadb = $fila['entrada'];
			$salidadb = $fila['salida'];

			if(((($fechaentrada >= $entradadb) && ($fechaentrada <= $salidadb)) || (($fechasalida >= $entradadb) && ($fechasalida <= $salidadb)))
				|| ((($entradadb >= $fechaentrada) && ($entradadb <= $fechasalida)) || (($salidadb >= $fechaentrada) && ($salidadb <= $fechasalida)))){ 
				$flag = 1; 
			}
		}

		if($flag == 1){echo '<script>alert("Fecha no disponible");</script>';}
		
		else{ if($entrada!="" && $salida!="") echo '<script>alert("Fecha disponible");</script>';}
	}

	public function insertarReserva($nombre,$apellido,$telefono,$entrada,$salida,$tipohabitacion){
		/*validar si la fecha que va a ingresar está disponible*/

		$fechaentrada = $entrada;
		$fechasalida = $salida;
		$flag = 0;
		$query = "SELECT * FROM Reserva WHERE Habitacion_tipohabitacion = '$tipohabitacion'"; //ASI SE REFERENCIA A UNA VARIABLE PARA INCLUIRLA EN LA CONSULTA .l.
		$resultado = mysql_query($query);
		
		while($fila = mysql_fetch_array($resultado)){		
			$entradadb = $fila['entrada'];
			$salidadb = $fila['salida'];

			if(((($fechaentrada >= $entradadb) && ($fechaentrada <= $salidadb)) || (($fechasalida >= $entradadb) && ($fechasalida <= $salidadb)))
				|| ((($entradadb >= $fechaentrada) && ($entradadb <= $fechasalida)) || (($salidadb >= $fechaentrada) && ($salidadb <= $fechasalida)))){ 
				$flag = 1; 
			}
		}

		if($flag == 1){echo '<script>alert("Fecha no admitida");</script>';}
		
		else{ 
			if($entrada!="" && $salida!="") {
				$query = "INSERT INTO Reserva(nombre,apellido,telefono,entrada,salida,Habitacion_tipohabitacion) values ('$nombre','$apellido','$telefono','$entrada','$salida','$tipohabitacion')"; 
				mysql_query($query);
				echo '<script>alert("Reserva exitosa!");</script>';
			}
		}

	}

	public function mostrarReservas(){
		$query = "SELECT * FROM Reserva";
		$resultado = mysql_query($query);

		while ($fila = mysql_fetch_array($resultado)) {
			echo "<tr>";
			echo "<td> $fila[numeroreserva] </td> <td> $fila[nombre] </td> <td> $fila[apellido] </td> <td> $fila[telefono] </td> <td> $fila[entrada] </td> <td> $fila[salida] </td> <td> $fila[Habitacion_tipohabitacion] </td>";
			echo "</tr>";
		}
	}

}



?>