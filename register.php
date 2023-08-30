	<?php include 'layouts/navbar.php'; ?>

<?php include 'layouts/style.php'; ?>

  <form method="post" action="">
    <label>Nombre</label>
    <input type="text" name="usuario">
    <br>
    <label>Marca</label>
    <input type="email" name="email">
    <br>
    <label>Fecha de lanzamiento</label>
    <input type="password" name="password">
    <br>
    <input type="submit" name="signup">
  </form>

<?php 

include 'config/db.php';
if (isset($_POST['signup'])) {
	$usuario=$_POST['usuario'];
	$email=$_POST['email'];
	$password=base64_encode($_POST['password']);

	/*echo $usuario . "<br>";
	echo $email  . "<br>";
	echo $password;*/

	$sql = "INSERT INTO usuarios (usuario, email, clave) VALUES ('$usuario', '$email', '$password')";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

 ?>