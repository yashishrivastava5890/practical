<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $language = $_POST['language'];

        echo "your favourite programming language is: " . $language;

   }
?>
   <form method="POST">
     <h3>Which is your favourite programming language?</h3>

     <input type="radio"name="language"value="PHP" required> PHP <br>
      <input type="radio"name="language"value="javascript" required> PHP <br>
       <input type="radio"name="language"value="Python" required> PHP <br><br>


   <input type="submit">
   </form>