<?php
  $students = ["Yashi" => 85, "Swechchha" => 90, "Tripti" => 78, "Saumya" => 92, "Niyati" => 88];

  $key="Tripti";

    if(array_key_exists($key, $students))
    {
        echo "The key '$key' exists in the array. Marks: " . $students[$key];
    }else{
        echo "The key '$key' does not exist in the array.";
    }


     


?>