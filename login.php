<html>
	<head>
		<title>Login</title>
        <link rel="stylesheet" href="style.css">
        <?php
            include('username.php');
			$pass = "password";
			$user = "brandonharrington";
			$database = oci_connect($user,$pass,'//csoracle.betheluniversity.edu:1521/orclpdb');
        ?>
    </head>
	<div class="container">
		<div class="form">
			<label>Login</label>
			<form method = "post">
				<label>Username: </label>
				<input type="text" name="username" id = "username" required></input>
				<input type="submit" value="Log In">
			</form>
		</div>
	</div>
</html> 