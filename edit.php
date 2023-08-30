<?php include 'layouts/navbar.php'; ?>

<?php include 'layouts/style.php'; ?>

<?php 

	require 'config/db.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM Juegos WHERE id = '$id'";
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
		<form method="post" action="prueba.php" enctype="multipart/form-data">
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
		    <label>Caratula</label>
		    <input type="file" name="imagen">
		    <br>
		    <label>Precio</label>
		    <input type="number" name="precio" value="<?php echo $precio ?>">

			<input type="submit" name="submit">
		</form>

	</center>
</body>
</html>
