<?php include 'layouts/navbar.php'; ?>

<?php include 'layouts/style.php'; ?>

<?php
  require 'config/db.php';
  $sql="SELECT * FROM imagen";
  $result = mysqli_query($conn, $sql);
?>


    <title>Prueba imagen</title>
<form action="" method="post" enctype="multipart/form-data">
<label>Imagen</label>
<input type="file" name="image">
<input type="submit" name="submit">
</form>
  <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($key = mysqli_fetch_assoc($result)) {
                 ?>
                    <tr>
                        <td><?php echo $key["id"] ?></td>
                        <td><img src="<?php echo $key["imagen"] ?>"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
<?php
require_once 'config/db.php'; 
$image=$_FILES['image']['name'];
$ruta=$_FILES['image']['tmp_name'];
$destino='img/'.$image;
copy($ruta, $destino);

 $sql = "INSERT INTO imagen (imagen) VALUES ('$destino')";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>