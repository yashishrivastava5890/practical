<?php

$countries = [ "USA" => "Washington, D.C.","France" => "Paris","Japan" => "Tokyo","India" => "New Delhi","Australia" => "Canberra"];
    
     $capital ="France";
      
     $country = array_search($capital, $countries);

  if ($country !== true){
     echo "The capital city '$capital' belongs to $country.";
  }
  else{
      echo "The capital city '$capital' was not found in the array.";
  }



?>