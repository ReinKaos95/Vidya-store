<?php include 'layouts/navbar.php'; ?>

<?php include 'layouts/style.php'; ?>

    <title>Prueba imagen</title>
<form action="" method="post" enctype="multipart/form-data">
<label>Imagen</label>
<input type="file" name="image">
<input type="submit" name="submit">
</form>

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