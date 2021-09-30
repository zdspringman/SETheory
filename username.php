
<?php
    $username = $_POST['username'];
    $cookie_name = 'username';
    $cookie_value = $username;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //sets the username cookie for 1 day.
?>