<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Calculate Electric bill</title>
</head>
<body>
    <?php
       class Electric{
        public $name;
        public $units;
        public $bill;
        function __construct($name, $units){
            $this->name = $name;
            $this->units = $units;
        }
        function Bill(){
            echo "<h1> Name of Electric Consumer $this->name </h1><br/>";
            if($this->units <= 50){
                   $this->bill = $this->units * 3.50;
                    return $this->bill;
                //    echo "Your total bill is  $this->bill<br>";
                }
            elseif($this->units > 50 && $this->units <= 150){ 
                $this->bill = 50*3.50;
                $this->bill += ($this->units -50) * 4.00;
                // echo "Your total bill is  $this->bill<br>";
                return $this->bill;
            }
           elseif($this->units > 150 && $this->units <= 250){ 
                $this->bill = 50*3.50;
                $this->bill += 100* 4.00;
                $this->bill += ($this->units -150) *5.2;
                         return $this->bill;      

            }
              else{
                $this->bill = 50*3.50;
                $this->bill += 100 * 4.00;
                $this->bill += 100 *5.2;
                $this->bill += ($this->units -250) * 6.00;
                return $this->bill;
              }
        }
       }
       $object = new Electric("Manoj",100);
       $bill = $object->Bill();
       echo "<h1>Total BIll-> $bill </h1>";

    ?>
</body>
</html>