<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business.com</title>
</head>
<body>
     <?php
        class Balaji{
            public $name;
            public $price;
        function __construct($name ,$price){
            $this->name = $name;
            $this->price = $price;

        }
        function Productview(){
            echo "<h3>Name of product= ".$this->name,"<br></h3>";
            echo "<h3>Price of product= ",$this->price."</h3>";
        }
    }
        $obj = new Balaji("Apple",400);
        $obj->Productview();
      
     
     ?>
</body>
</html>