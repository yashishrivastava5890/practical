<?php

 echo   "<h2>Using for loop</h2>";
     for($i=1; $i<=20; $i++){
        echo $i . " ";
        
     }


  echo "<h2>Using while loop</h2>";
    $i = 1;
    while($i <= 20){
        echo $i . " ";
        $i++;
    }   
echo "<h2>Using do while loop</h2>";
    $i = 1;
     do{
        echo $i . " ";
        $i++;
     }while($i <= 20);


?>