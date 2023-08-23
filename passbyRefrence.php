<?php
function  adder(&$x){
    $x = "this is call by reference";
}$y="hello php";
adder($y);
echo $y;

?>