
<?php

    $username = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $username = $_POST['username'];
        if (empty($username)) {
          echo "Userame is empty";
        } else {
            $cookie_name = 'username';
            $cookie_value = $username;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //sets the username cookie for 1 day.
        }
      }

    if ($username == "admin") {
        header("Location: advisorView.php");
    }
    if ($username == "bypass") {
        header("Location: advisorClasses.php");
    }
    else {
        echo "<script>alert('Invalid Username')</script>";
    }

    
?>