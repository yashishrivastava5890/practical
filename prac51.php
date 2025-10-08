<?php



if (isset($_COOKIE['discount'])) {
    $offerMessage = " Welcome! You get 10% off (valid for 10 minutes).";
} else {
   
    setcookie("discount", "valid", time() + (60 * 10));
    $offerMessage = " Welcome! You get 10% off (valid for 10 minutes).";
}
?>
<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
    
   
        <?php echo $offerMessage; ?>

</body>
</html>