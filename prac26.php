<?php
  $array = [10, 20, 30, 40, 50, 60];

   echo "Original Array:\n";
   print_r($array);
    echo "<br>";

    echo"\n (manual method): \n";
     for($i = count($array) - 1; $i >= 0; $i--){
            echo $array[$i] . " ";
     }
     echo "<br>";

     $reversed = array_reverse($array);
     echo "\n(using array_reverse):\n";
     print_r($reversed);





?>