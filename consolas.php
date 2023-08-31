<?php include 'layouts/navbar.php'; ?>

<?php include 'layouts/style.php'; ?>
<?php
  require 'config/db.php';
  $sql="SELECT * FROM Consolas";
  $result = mysqli_query($conn, $sql);
?>
<body>
<center>
    
  <form method="post" action="" enctype="multipart/form-data">
    <label>Nombre</label>
    <input type="text" name="nombre">
    <br>
    <label>Caratula</label>
    <input type="file" name="imagen">
    <br>
     <label>Descripcion</label>
    <input type="text" name="descripcion">
    <br>
    <label>Precio</label>
    <input type="number" name="precio" value="0.0">
    <br>
    <input type="submit" name="submit">
  </form>
  <table class="table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($key = mysqli_fetch_assoc($result)) {
                 ?>
                    <tr>
                        <td><?php echo $key["id"] ?></td>
                        <td><img src="<?php echo $key["imagen"] ?>"  width="150" height="300"></td>
                        <td><?php echo $key["nombre"] ?></td>
                        <td><?php echo $key["descripcion"] ?></td>
                        <td><?php echo $key["precio"] . "$" ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $key["id"] ?>">Editar</a>
                        </td>
                        <td>
                            <a href="eliminar.php?id=<?php echo $key["id"] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
</center>
</body>


<?php 
include 'config/db.php';
if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $imagen=$_FILES['imagen']['name'];
  $ruta=$_FILES['imagen']['tmp_name'];
  $destino='img/'.$imagen;
  copy($ruta, $destino);
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];

 
  /*echo $nombre . '<br>';
  echo $marca . '<br>';
  echo $fecha_salida . '<br>';
  echo $destino . '<br>';
  echo $precio;*/

  $sql = "INSERT INTO Consolas (nombre, imagen, descripcion, precio) VALUES ('$nombre', '$destino', '$descripcion',  '$precio') ";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


}

 ?>