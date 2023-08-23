<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name= $_POST["n1"];
        $email = $_POST["n2"];
        echo "Name ".$name."<br>";
        echo "Email ".$email."<br>";
       }
    
    ?>
</body>
</html>