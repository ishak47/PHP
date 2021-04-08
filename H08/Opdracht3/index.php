<?php

include_once ("Autooverzicht.php");

$merk = isset($_GET["merk"]) ? $_GET["merk"] : "";
$minprijs = isset($_GET["min-prijs"]) ? $_GET["min-prijs"] : 0;
$maxprijs = isset($_GET["max-prijs"]) ? $_GET["max-prijs"] : 99999999999999;
?>
<html lang="en">
<head>
    <title>MR Wheely</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="wrapper">
    <img class="header" src="img/wheely_header.jpg" alt="header-img">
    <form action="index.php" method="get">
        <label>
            Merk: <br>
            <select id="merk" name="merk">
                <option value="">merken</option>
                <option value="audi">Audi</option>
                <option value='ferrari'>ferrari</option>
                <option value="fiat">fiat</option>
                <option value="mercedes">mercedes</option>
                <option value="opel">opel</option>
                <option value="volkswagen">volkswagen</option>
            </select>
        </label>
        <label>
            Minimale prijs: <br>
            <input type="number" id="min-prijs" name="min-prijs">
        </label>
        <label>
            Maximale prijs: <br>
            <input type="number" id="max-prijs" name="max-prijs">
        </label>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

