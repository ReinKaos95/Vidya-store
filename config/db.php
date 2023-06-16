<?php 

$host = "localhost";
$user = "root";
$password = "";
$dbname = "bazar";

try {
    $conn = mysqli_connect($host, $user, $password, $dbname);
} catch (Exception $e) {
    echo $e->getMessage();
}

 ?>