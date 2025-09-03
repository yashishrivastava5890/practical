<?php
       
    $arr=[4,1,7,3,2,6,9];
        echo "<h1>Original Array:<br></h1>";
        print_r($arr);
        echo"<br><br>";
          
        $temp = $arr;
        sort($temp);
        echo"<h1>Using Sort():<br></h1>";
        print_r($temp);




?>