<?php include 'Public/Layouts/navbar.php'; ?>

<?php include 'Public/Layouts/style.php'; ?>

<?php
  /*require 'config/db.php';
  $sql="SELECT * from consolas INNER JOIN tipo_consola on tipo_consola.id=consolas.tipo_consola_id";
  $result = mysqli_query($conn, $sql);*/
?>
<body>
<center>
  <table class="table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Tipo de consola</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                           
                        </td>
                        <td>
                           
                        </td>
                    </tr>

            </tbody>
        </table>
</center>
</body>


<?php 
/*include 'config/db.php';
if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $imagen=$_FILES['imagen']['name'];
  $ruta=$_FILES['imagen']['tmp_name'];
  $destino='img/'.$imagen;
  copy($ruta, $destino);
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];

 
  echo $nombre . '<br>';
  echo $marca . '<br>';
  echo $fecha_salida . '<br>';
  echo $destino . '<br>';
  echo $precio;

  $sql = "INSERT INTO Consolas (nombre, imagen, descripcion, precio) VALUES ('$nombre', '$destino', '$descripcion',  '$precio') ";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


}
*/
 ?>