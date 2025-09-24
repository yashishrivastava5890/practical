<?php
  if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "<h3>Thankyou  " . htmlspecialchars($name) . ", we will contact you soon!</h3>";
  }
?>
<form method = "GET">
   <h3>Contact Form</h3>
   Name: <input type="text" name="name" required><br><br>
   Name: <input type="text" name="subject" required><br><br>
   Name: <textarea name="name" required></textarea><br><br>
   <input type="submit"value="submit">
</form>

