	<?php include 'layouts/navbar.php'; ?>
	<?php include 'layouts/style.php'; ?>

<?php 


if (isset($_SESSION['signup'])) {
	header("location: index.php");
}

 ?>

   <h3>Sign Up Page</h3>
 
        <div class="form">
            <form action="">
                        <label for="f_name">First name:</label>
                        <input class="form-control" type="text" id="f_name" name="f_name">
                        <label for="l_name">Last name:</label>
                        <input class="form-control" type="text" id="l_name" name="l_name">
                        <label for="email"> Email:</label>
                        <input class="form-control" type="email" id="email" name="email">
                        <label for="pass">Password:</label>  
                        <input class="form-control" type="password" id="pass" name="pass">
                <button type="submit">Join</button>
            </form>
        </div>