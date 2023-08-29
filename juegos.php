<?php include 'layouts/navbar.php'; ?>

<?php include 'layouts/style.php'; ?>
<?php
  require 'config/db.php';
  $sql="SELECT * FROM producto";
  $result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prueba Crud</title>
</head>
<body>
<center>
    <span>Prueba CRUD / Conexion a base de datos</span>
  <form method="post" action="">
    <label>Nombre</label>
    <input type="text" name="nombre">
    <br>
    <label>Marca</label>
    <input type="text" name="marca">
    <br>
    <label>Fecha de lanzamiento</label>
    <input type="date" name="fecha_salida">
    <br>
    <input type="submit" name="submit">
  </form>
  <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Fecha de Salida</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($key = mysqli_fetch_assoc($result)) {
                 ?>
                    <tr>
                        <td><?php echo $key["id"] ?></td>
                        <td><?php echo $key["nombre"] ?></td>
                        <td><?php echo $key["marca"] ?></td>
                        <td><?php echo $key["fecha_salida"] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $key["id"] ?>">Editar</a>
                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo $key["id"] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
</center>
</body>
</html>

<?php 
include 'config/db.php';
if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $marca = $_POST['marca'];
  $fecha_salida = $_POST['fecha_salida'];

  /*echo $nombre . '<br>';
  echo $marca . '<br>';
  echo $fecha_salida;*/

  $sql = "INSERT INTO producto (nombre, marca, fecha_salida) VALUES ('$nombre', '$marca', '$fecha_salida') ";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


}

 ?>