<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      function family($fname, $year){
        echo "$fname Refsnes. Born in $year <br>";
      }
      function hello($name="first",$last="last"){
        echo "hello $name, $last.<br>";
      }
      function sum($a,$b){
        echo "sum= ".$a+$b,"<br>";
      }

      sum(19,21);
    hello();
    hello("Gajanan");
    hello("","mohanan");
   family("Rohan",1993);
      ?>
</body>
</html>