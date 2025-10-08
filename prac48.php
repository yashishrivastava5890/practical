<?php

if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    echo "<h2>Welcome back, $username!</h2>";
} else {
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = ($_POST['username']);
       
        setcookie("username", $username, time() + (120));
        echo "Welcome back, $username! ";
    } else {
        
        ?>
        <form method="post" action="">
            Enter your name: <input type="text" name="username" id="username" > <br> <br>
            <button type="submit">Submit</button>
        </form>
        <?php
    }
}
?>