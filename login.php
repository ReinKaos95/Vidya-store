	<?php include 'layouts/navbar.php'; ?>
	<?php include 'layouts/style.php'; ?>

<?php 


if (isset($_SESSION['signup'])) {
	header("location: index.php");
}

 ?>
<center>
   <h3>Sign Up Page</h3>
 
        <div class="form">
			
            <form action="">
                        <label for="email"> Email:</label>
                        <input class="form-control" type="email" id="email" name="email">
                        <label for="pass">Password:</label>  
                        <input class="form-control" type="password" id="pass" name="pass">
                        <br>
                <button type="submit">Join</button> <button type="submit">Signup</button>
            </form>
			
        </div>
</center>