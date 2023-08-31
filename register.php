	<?php include 'layouts/navbar.php'; ?>

<?php include 'layouts/style.php'; ?>

<center>
  <h1>Logeo de usuarios</h1>
    <form method="post" action="">
    <label>Usuario</label>
    <input type="text" name="usuario">
    <br>
    <label>Nombre</label>
    <input type="text" name="nombre">
    <br>
    <label>Apellido</label>
    <input type="text" name="apellido">
    <br>
    <label>Email</label>
    <input type="email" name="email">
    <br>
    <label>Fecha de lanzamiento</label>
    <input type="password" name="password">
    <br>
    <input type="submit" name="signup">
  </form>
</center>

<?php 

include 'config/db.php';
if (isset($_POST['signup'])) {
	$usuario=$_POST['usuario'];
	$nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $email=$_POST['email'];
	$password=base64_encode($_POST['password']);

	/*echo $usuario . "<br>";
	echo $email  . "<br>";
	echo $password;*/

	$sql = "INSERT INTO usuarios (usuario, nombre, apellido, email, clave) VALUES ('$usuario', '$nombre', '$apellido', '$email', '$password')";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

 ?>