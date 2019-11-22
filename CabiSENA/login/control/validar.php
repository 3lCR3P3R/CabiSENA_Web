<?php
$con=mysqli_connect('localhost','root','','cabisena') or die('Error en la conexion');
if (isset($_POST['login'])) {
	//VARIABLES DEL USUARIO
$usuario = $_POST['txtusuario'];
$pass = $_POST['txtpass'];
//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
if (empty($usuario) | empty($pass)) 
	{
	header("Location: ../v1.html");
	exit();
	}
//VALIDANDO EXISTENCIA DEL USUARIO
$sql = mysqli_query($con,"SELECT * from usuarios where usuario = '$usuario' and clave = '$pass' ");
if ($row = mysqli_fetch_array($sql)) 
		{
		session_start();
		$_SESSION['nombre'] = $usuario;
		header("Location: ../perfil.php?txtusuario=$usuario");
		}else
			{
			header("Location: ../v1.html");
			exit();
		}
}
if (isset ($_REQUEST['register'])){
	$usuario = $_POST['txtusuario'];
				$pass = $_POST['txtpass'];
	if (empty($usuario) && empty($pass)) 
	{
	header("Location: ../v1.html");
	exit();
	}
				
				$datos=mysqli_query($con,"INSERT INTO usuarios (usuario,clave) VALUES ('$usuario','$pass')");
				if (!$datos) {
					header("Location: ../v1.html");
				} else {
					header("Location: ../v2.html");
				}
				}
?>