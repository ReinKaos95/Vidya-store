<?php 

	require 'config/db.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM producto WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$id = $row[0];
	$nombre = $row[1];
	$marca = $row[2];
	$fecha_salida = $row[3];

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prueba de edicion</title>
</head>
<body>
<center>
		<form method="post" action="">
			<label>Prueba de edicion</label>
			<br>
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<br>
			<label>Nombre</label>
			<input type="text" name="nombre" value="<?php echo $nombre ?>">
			<br>
			<label>Marca</label>
			<input type="text" name="marca" value="<?php echo $marca ?>">
			<br>
			<label>Fecha de lanzamiento</label>
			<input type="date" name="fecha_salida" value="<?php echo $fecha_salida ?>">
			<br>
			<input type="submit" name="submit">
		</form>

	</center>
</body>
</html>

<?php 

if (isset($_POST['submit'])) {
include 'config/db.php';
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$fecha_salida = $_POST['fecha_salida'];

$sql = "UPDATE producto SET nombre='$nombre', marca='$marca', fecha_salida='$fecha_salida' WHERE id ='$id'";
	if (mysqli_query($conn, $sql)) {
		header("Location: index.php");
	}else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

}

 ?>