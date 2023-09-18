
<link rel="stylesheet" type="text/css" href="../css/main.css" > 

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" crossorigin="anonymous">

<?php include '../navbar.php'; ?>

<?php
  require '../../config/db.php';
  $sql="SELECT * from juegos INNER JOIN consolas on consolas.c_id=juegos.id";
  $result = mysqli_query($conn, $sql);
?>


  <form method="post" action="" enctype="multipart/form-data">
    <label>Nombre</label>
    <input type="text" name="nombre">
    <br>
    <label>Marca</label>
    <input type="text" name="marca">
    <br>
    <label>Fecha de lanzamiento</label>
    <input type="date" name="fecha_salida">
    <br>
    <label>Caratula</label>
    <input type="file" name="imagen">
    <br>
    <label>Precio</label>
    <input type="number" name="precio" value="0.0">
    <br>
     <select name="consola">
      <option value="#">Consola</option>
           <?php
       while ($key = mysqli_fetch_assoc($result)) {
      ?>
      <option name="rol" value="<?php echo $key["c_id"] ?>"><?php echo $key["c_nombre"] ?></option>
    <?php } ?>
    </select> 
    <br>
    <input type="submit" name="submit">
  </form>


  <?php 
include '../../config/db.php';
if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $marca = $_POST['marca'];
  $fecha_salida = $_POST['fecha_salida'];
  $imagen=$_FILES['imagen']['name'];
  $ruta=$_FILES['imagen']['tmp_name'];
  $destino='img/'.$imagen;
  copy($ruta, $destino);
  $precio = $_POST['precio'];
 $consola = $_POST['consola'];
 
  /*echo $nombre . '<br>';
  echo $marca . '<br>';
  echo $fecha_salida . '<br>';
  echo $destino . '<br>';
  echo $precio;*/

  $sql = "INSERT INTO Juegos (nombre, marca, fecha_salida, imagen, precio, consola_id) VALUES ('$nombre', '$marca', '$fecha_salida', '$destino', '$consola') ";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


}

 ?>