<?php

if (isset($_COOKIE['visits'])) {
    $visits = $_COOKIE['visits'] + 1;
    setcookie("visits", $visits, time() + (120)); 
    echo "You have visited $visits times.";
} else {
    
    $visits = 1;
    setcookie("visits", $visits, time() + (120));
    echo "This is your first visit!";
}
?>