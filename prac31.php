<?php

$countries = [ "USA" => "Washington, D.C.","France" => "Paris","Japan" => "Tokyo","India" => "New Delhi","Australia" => "Canberra"];


 $countries['Germany'] = "Berlin";

  foreach($countries as $country => $capital){
    echo "The capital of $country is $capital.<br> ";
  }



?>