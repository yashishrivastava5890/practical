<?php
 echo "<h2>Even numbers between 1 and 100:</h2> <br>";
   for ($i = 1; $i <= 100; $i++){
      if($i %2 == 0){
        echo $i . " ";
      }

   }

?>