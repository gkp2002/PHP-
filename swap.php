<?php
   function swap($a, $b){
    //    global $c;
    
    echo "swap before $a and $b<br>";
    $c=$a;
    $a=$b;
    $b=$c;
     echo "swap After $a and $b<br>";
   }
   swap(10,12);
?>