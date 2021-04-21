<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table, tr, td{
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
<table>
<?php

$host = 'localhost';
$port = '3306';
$user = 'id16650343_root';
$password = '!7?}Mf%hgF+T}2D<';
$db = 'school';

try {
    $dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port , $user,$password);
} catch (PDOException $e){
    echo "ERROR (DEZE)!: " . $e->getMessage();
}

$query = "SELECT * from cursist";
$stmt = $dbh->prepare($query) or die("error1");
$stmt->execute() or die("error2");

while ($row = $stmt->fetch()){
    echo "<tr>";
    echo "<td>" . $row['cursistnr'] . "</td>";
    echo "<td>" . $row['naam'] . "</td>";
    echo "<td>" . $row['roepnaam'] . "</td>";
    echo "<td>" . $row['straat'] . "</td>";
    echo "<td>" . $row['postcode'] . "</td>";
    echo "<td>" . $row['plaats'] . "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>


