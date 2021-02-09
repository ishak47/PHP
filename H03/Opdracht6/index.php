<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$deSpartelKuikens = 25;
$deWaterBuffels = 32;
$plonsmderin = 11;
$Bommetje = 23;

 $clubs = array("deSpartelkuikens" => $deSpartelKuikens, "deWaterBuffels" => $deWaterBuffels, "plonsmderin" => $plonsmderin, "Bommetje" => $Bommetje);

?>


<table border="1px solid black ">
    <tr>
        <td>
             zwemclubs
        </td>
        <td colspan="2">
            aantal leden
        </td>
    </tr>
    <tr>
        <td>
            de spartelkuikens
        </td>
        <td>
            25
        </td>
    </tr>
    <tr>
        <td>
            de waterbuffels
        </td>
        <td>
            32
        </td>
    </tr>
    <tr>
        <td>
            plonsmderin
        </td>
        <td>
            11
        </td>
    </tr>
    <tr>
        <td>
            bommetje
        </td>
        <td>
            23
        </td>
    </tr>
</table>
</body>
</html>

<?php
foreach ( $clubs as $leden) {
    for ($i = 0; $i <= $leden; $i++) {
        echo "<img src= zwemmer.png>";
        $i = $i + 5;
    }
    echo "<br>";
}
?>