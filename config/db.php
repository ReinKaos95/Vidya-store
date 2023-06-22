<?php 

$host = "localhost";
$user = "root";
$password = "";
$dbname = "tiendita";

try {
    $conn = mysqli_connect($host, $user, $password, $dbname);
    echo true;
} catch (Exception $e) {
    echo $e->getMessage();
}

 ?>