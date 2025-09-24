<?php

  if($_SERVER ["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Redirect to thankyou .php with name in URL
    header ("Location: thankyou.php?name=" . urlencode($name));
    exit(); // Important: script stop karne ke liye
  }
?>

<form method="POST">
    <h3>Feedback Form</h3>
    Name: <input type="text" name="name" required> <br><br>
     Email: <input type="email" name="email" required> <br><br>
      Message: <textarea name="message" required> </textarea><br><br>

      <input type="submit"value="submit">

</form>