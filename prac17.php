<?php
 echo "<h2>odd numbers between 20 and 80:</h2> <br>";
   for ($i = 20; $i <= 80; $i++){
      if($i %2 != 0){
        echo $i . " ";
      }

   }

?>