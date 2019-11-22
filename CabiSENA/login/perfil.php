<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo "<script>alert('esta activo')</script>";
session_start();
if (isset($_SESSION['usuario'])) {
header("Location: v1.html");
}else{
	$nombre = "si";
	header("Location: si.html");
}

?>

<a href="../index.php">GET</a>


<?php
exit();
?>
</body>
</html>
