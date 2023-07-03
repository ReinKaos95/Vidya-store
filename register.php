	<?php include 'layouts/navbar.php'; ?>
	<?php include 'layouts/style.php'; ?>

<center>
   <h3>Registrarion Page</h3>
 
        <div class="form">
			
            <form action="" method="post">
                        <label for="username">Usuario:</label>
                        <input class="form-control" type="text" id="username" name="username">
                        <label for="email"> Email:</label>
                        <input class="form-control" type="email" id="email" name="email">
                        <label for="pass">Password:</label>  
                        <input class="form-control" type="password" id="pass" name="pass">
                        <br>
               	<input type="submit" name="register">
                <br>
                <p>Tienes una cuenta? <a href="login.php">Registrate</a></p>
            </form>
			
        </div>
</center>

<?php 

include 'config/db.php';

	if (isset($_POST['register'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass = base64_encode($_POST['pass']);

	$validate=$conn->query("SELECT * FROM users WHERE email = '$email'");
	$count=$validate->num_rows;

	if ($count > 0) {
		echo "usuario actualmente existe";
	}

	else{

	$regis=$conn->query("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$pass'");

	if ($regis) {
		echo "registro con exito";
	}

	}

}

 ?>