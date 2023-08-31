<?php include 'layouts/navbar.php'; ?>

<?php include 'layouts/style.php'; ?>

<?php 

    require 'config/db.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM Consolas WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $id = $row[0];
    $nombre = $row[1];
    $descripcion = $row[3];
    $precio = $row[4];

 ?>


<center>
        <form method="post" action="" enctype="multipart/form-data">
            <label>Prueba de edicion</label>
            <br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <br>
            <label>Nombre</label>
            <input type="text" name="nombre" value="<?php echo $nombre ?>">
            <br>
            <label>Caratula</label>
            <input type="file" name="imagen">
            <br>
            <label>Descripcion</label>
            <input type="text" name="marca" value="<?php echo $descripcion ?>">
            <br>
            <label>Precio</label>
            <input type="number" name="precio" value="<?php echo $precio ?>">
            <br>
            <input type="submit" name="submit">
        </form>

    </center>

<?php 

if (isset($_POST['submit'])) {
include 'config/db.php';
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$imagen=$_FILES['imagen']['name'];
$ruta=$_FILES['imagen']['tmp_name'];
$destino='img/'.$imagen;
copy($ruta, $destino);
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$sql = "UPDATE Consolas SET nombre='$nombre', descripcion='$descripcion', imagen='$destino', precio='$precio' WHERE id ='$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}

 ?>