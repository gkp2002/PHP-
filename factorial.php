<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Factorial</title>
</head>
<body>
    <?php
    function factorial($number){
          if($number==0){
            return 1;
          } else{
            return $number*= factorial($number-1);
          }
        
    }
     echo factorial(5);
    ?>
</body>
</html>