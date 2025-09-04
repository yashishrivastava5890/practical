<?php
   $fruits = ["Apple" => 120, "Banana" => 60, "Orange" => 80, "Mango" => 150, "Grapes" => 90];

   echo"Original Array:\n";
   print_r($fruits);
   echo "<br>";

   asort($fruits);
   echo "\nSorted by values (asort):\n";
   print_r($fruits);
   echo"<br>";

   ksort($fruits);
   echo "\nSorted by keys (ksort):\n";
   print_r($fruits);



?>