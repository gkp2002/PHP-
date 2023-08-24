<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Grade Calculator</title>
</head>
<body>
    <?php
      class Grade{
          public $marks;
          function  __construct($marks){
            $this->marks = $marks;
          }
          function GradeCalculate(){
              if($this->marks>=60){
                echo "<h1>Congratulations pass in first Division!</h1>";
              }
                 elseif($this->marks>=45 && $this->marks<59){
                    echo "<h1>Congratulations pass in second Division!</h1";
                 }
                 elseif($this->marks>=33 && $this->marks<44){
                    echo "<h1>Congratulations pass in third Division!</h1>";
                 }
                else{
                    echo "<h1>Sorry! You are fail</h1>";
                }
          }
      }
      $object = new Grade(30);
      $object->GradeCalculate();
    ?>
</body>
</html>