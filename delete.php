<?php 

include 'config/db.php';
$id=$_GET['id'];
$sql = "DELETE FROM producto WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

 ?>