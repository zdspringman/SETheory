<!DOCTYPE html>
<?php include 'username.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Username</label>
        <input type="text" name="username" id = "username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <button type="submit" name="login" value="login">Log In</button>
    <input type="hidden" name="button_pressed" value="1" />
    </form>  
</body>
</html>