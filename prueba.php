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