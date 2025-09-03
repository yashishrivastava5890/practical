<?php

$numbers = [45, 12, 78, 5, 32, 90];

echo "Original Array:\n";
print_r($numbers);
  echo"<br>";

sort($numbers);
 echo "\nArray in Ascending Order:\n";
 print_r($numbers);
 echo "<br>";

 rsort($numbers);
 echo "\nArray in Descending Order:\n";
 print_r($numbers);


?>