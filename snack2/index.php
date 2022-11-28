<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <p>Name</p>
        <input type="text" name="name" id="name">
        <p>Email</p>
        <input type="email" name="email" id="email">
        <p>Age</p>
        <input type="text" name="age" id="age">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php 

    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];

    /*
    if(strlen($name) >= 3){
        echo "nome maggiore di 3";
        echo "<br>";
    }
    if(is_numeric($age)){
        echo "age è un numero";
        echo "<br>";
    }
    if(str_contains($email, "@") && str_contains($email, ".")){
        echo "è un email";
        echo "<br>";
    }
    */

    if(strlen($name) >= 3 && is_numeric($age) && str_contains($email, "@") && str_contains($email, ".")){
        echo "Access Granted";
    } else {
        echo "Access Denied";
    }
?>