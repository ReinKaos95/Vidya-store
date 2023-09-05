<?php include 'layouts/navbar.php'; ?>

<?php include 'layouts/style.php'; ?>

<?php
  require 'config/db.php';
  $sql="SELECT * FROM  slider";
  $result = mysqli_query($conn, $sql);
?>

<center>
    <form action="" method="post" enctype="multipart/form-data">
<label>Imagen</label>
<input type="file" name="image">
<br>
<input type="text" name="titulo">
<br>
<input type="submit" name="submit">
</form>

  <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Titulo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($key = mysqli_fetch_assoc($result)) {
                 ?>
                    <tr>
                        <td><?php echo $key["id"] ?></td>
                        <td><img src="<?php echo $key["imagen"] ?>"  width="400" height="400"></td>
                        <td><?php echo $key["titulo"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </center>

<?php 
include 'config/db.php';
if (isset($_POST['submit'])) {
  $image=$_FILES['image']['name'];
  $ruta=$_FILES['image']['tmp_name'];
  $destino='img/'.$image;
  copy($ruta, $destino);
  $titulo = $_POST['titulo'];

 
  
  echo $destino . '<br>';
  echo $titulo;

  $sql = "INSERT INTO slider (imagen, titulo) VALUES ('$destino', '$titulo')";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


}

 ?>