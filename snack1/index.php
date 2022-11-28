<!-- 
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di 
    casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo 
    schema.

    Olimpia Milano - Cantù | 55-60
-->

<?php 

$matches = [
    $match => [
        $homeName => "sas1",
        $opposingName => "asa1",
        $homePoints => 1, 
        $opposingPoints => 2
    ],
    $match => [
        $homeName => "sas2",
        $opposingName => "asa2",
        $homePoints => 4, 
        $opposingPoints => 3
    ],
    $match => [
        $homeName => "sas3",
        $opposingName => "asa3",
        $homePoints => 2, 
        $opposingPoints => 6
    ],
    $match => [
        $homeName => "sas4",
        $opposingName => "asa4",
        $homePoints => 6, 
        $opposingPoints => 4
    ],
    $match => [
        $homeName => "sas5",
        $opposingName => "asa5",
        $homePoints => 3, 
        $opposingPoints => 1
    ],
];

var_dump($matches);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($matches as $match) : ?>
        <li><?php echo $match["homeName"] . "-" . $match["opposingName"] ?> | <php echo $match["homePoints"] ?></php></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>