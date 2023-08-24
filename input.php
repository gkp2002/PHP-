<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter  first number&nbsp;&nbsp;&emsp14;&emsp13;</label>
        <input type="text" name="num1"><br><br>
        <label for="">Enter  second number</label>
        <input type="text" name="num2"><br><br>
        <input type="submit" >
    </form>
    <?php
       $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
       echo "<h1>",$num1+$num2,"</h1>";
       ?>
</body>
</html>