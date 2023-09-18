    
<link rel="stylesheet" type="text/css" href="../css/main.css" > 

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" crossorigin="anonymous">

<?php include '../navbar.php'; ?>

<?php
  require '../../config/db.php';
  $sql="SELECT * from consolas INNER JOIN tipo_consola on tipo_consola.id=consolas.c_id";
  $result = mysqli_query($conn, $sql);
?>

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
    <select name="consola">
      <option value="#">Consola</option>
           <?php
       while ($key = mysqli_fetch_assoc($result)) {
      ?>
      <option name="rol" value="<?php echo $key["c_id"] ?>"><?php echo $key["tipo_consola"] ?></option>
    <?php } ?>
    </select> 
    <br>
    <input type="submit" name="submit">
  </form>