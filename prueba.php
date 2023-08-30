
<?php 

if (isset($_POST['submit'])) {
include 'config/db.php';
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$fecha_salida = $_POST['fecha_salida'];
$imagen=$_FILES['imagen']['name'];
$ruta=$_FILES['imagen']['tmp_name'];
$destino='img/'.$imagen;
copy($ruta, $destino);
$precio = $_POST['precio'];

$sql = "UPDATE Juegos SET nombre='$nombre', marca='$marca', fecha_salida='$fecha_salida', imagen='$destino', precio='$precio' WHERE id ='$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}

 ?>