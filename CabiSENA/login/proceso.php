
<?php
include('conexion.php');
$con=conectar();

if (isset($_REQUEST["envio"])){
	$CL_FB=$_REQUEST['CL_FB'];
	$NombreF=$_REQUEST['NombreF'];

	$datos=mysqli_query($con,"INSERT INTO FABRICANTES(CL_FB,NombreF) VALUES ('$CL_FB','$NombreF')");
	echo ("<br>");
	if(!$datos){
		echo ("No se pudo insertar ningun dato");
	}
		else{
			echo ("Si se insertaron los datos satisfactoriamente");
	}
}

if (isset($_REQUEST["actualizo"])){
	$CL_FB=$_REQUEST['Clave'];
	$NombreF=$_REQUEST['Nombre'];

	$datos=mysqli_query($con,"UPDATE FABRICANTES SET NombreF='$NombreF' WHERE CL_FB=$CL_FB");
	echo ("<br>");
	if(!$datos){
		echo ("No se pudo actualizar ningun dato");
	}
		else{
			echo ("Si se actualizaron los datos satisfactoriamente");
	}
}

if (isset($_REQUEST["elimino"])){
	$CL_FB=$_REQUEST['num'];

	$datos=mysqli_query($con,"DELETE FROM FABRICANTES WHERE (CL_FB='$CL_FB')");
	echo ("<br>");
	if(!$datos){
		echo ("No se pudo borrar el dato");
	}
		else{
			echo ("Se borro el dato satisfactoriamente");
	}
}
if (isset($_REQUEST["mostro"])){
	$datos=mysqli_query($con,"SELECT * FROM FABRICANTES");
	echo ("<br>");
	if(!$datos){
		echo ("No se pudo mostrar ningun dato");
	}
		else{
			while ($fila=mysqli_fetch_array($datos)) {
				print("<table border=1><tr><td>$fila[CL_FB]</td><td>$fila[NombreF]</td></tr></table>");
			}
	}
}
?>