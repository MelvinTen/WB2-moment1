<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Currency</h1>
    <?php
    $dollar = $_POST['currency'];
    $sek = $dollar * 9.7;
    
    echo "<p>$dollar $  =  $sek kr</p>";
?>
</body>

<body>
    <h1> Melvin</h1>
    <h1>Namn och ålder</h1>
    <?php
    $namn = $_POST['namn'];
    $ålder = $_POST['ålder'];
    $pension = 65 - $ålder;

    echo "<p>" . "Du heter " . $namn . " och du är " . $ålder . " år gammal." . "</p>";
    echo "<p>" . "Du går i pension om " . $pension . " år." . "</p>";
    ?>
</body>

<body>
    <h1>Kalkylator</h1>
    <?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $sum = $n1 + $n2;

    echo "<p>" . "Summan är " . $sum . "</p>";
    ?>
</body>

<body>
<h1>Resultat</h1>
<?php 
    $points = 0;
    $ansOne = $_POST['qOne'];
    $ansTwo = $_POST['qTwo'];
    $ansThree = $_POST['qThree'];
    $ansFour = $_POST['qFour'];

    if($ansOne == 'php')
        $points++;
    if($ansTwo == 'sve')
        $points++;
    if($ansThree == 'te3')
        $points++;
    if($ansFour == '1560')
        $points++;

    echo '<strong>Du fick '.$points.' av 4 möjliga! Grattis!</strong>';
?>
</body>

</html>

