<!DOCTYPE html>
<?php

include_once ("auto.php");

$minprijs = isset($_GET["min-prijs"]) ? $_GET["min-prijs"] : 0;
$maxprijs = isset($_GET["max-prijs"]) ? $_GET["max-prijs"] : 99999999999999;


?>
<html lang="en">
<head>
    <title>MR Wheely</title>
    <meta charset="UTF-8">
    <link href="kleur.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="wrapper">
    <img class="header" src="img/wheely_header.jpg" alt="header-img">
    <form action="index.php" method="get">
        <label>
            <label class="titel">Merk: </label><br>
            <select class="vorm" id="merk" name="merk">
                <option value="">--Alle Merken--</option>
                <option value="audi">Audi</option>
                <option value='ferrari'>ferrari</option>
                <option value="fiat">fiat</option>
                <option value="mercedes">mercedes</option>
                <option value="opel">opel</option>
                <option value="volkswagen">volkswagen</option>
            </select><br>
        </label>
        <label>
            <label class="titel"> Minimale prijs:</label> <br>
            <input class="vorm" type="number" id="min-prijs" name="min-prijs"><br>
        </label>
        <label>
            <label class="titel">Maximale prijs:</label> <br>
            <input class="vorm" type="number" id="max-prijs" name="max-prijs"><br>
        </label>
        <button type="submit">Submit</button>
    </form>
</html>

<?php
include_once("Autooverzicht.php");

$autoos = new Autooverzicht();

foreach ($autoos->getAutoLijst() as $auto){
    if ($auto->getPrijs() > $minprijs && $auto->getPrijs() < $maxprijs){
        echo $auto->getMerk() . '-' . $auto->getPrijs() . '<br>';
        echo '<img src="'. $auto->getImageUrl().'" alt=""><br>';
    }
}
?>
