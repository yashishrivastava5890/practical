<?php
  $students = ["Yashi" => 85, "Swechchha" => 90, "Tripti" => 78, "Saumya" => 92, "Niyati" => 88];

  $students["Aashi"] = 95;

  foreach ($students as $student => $marks){
    echo "$student: $marks\n";
  }



?>