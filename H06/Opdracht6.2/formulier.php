<?php

$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];
$inloggen = false;

$host = 'localhost';
$port = '3306';
$user = 'root';
$password = '';
$db = 'school';

try {
    $dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port , $user,$password);
    }catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$row = $dbh->query('SELECT email, wachtwoord from gegevens');
foreach ($row as $rows) {
    if ($rows['email'] == $email && $rows['wachtwoord'] == $wachtwoord) {
        echo 'WELKOM!';
        $inloggen = true;
    }
}

if ($inloggen == false) {
    echo 'uw gegevens kloppen niet <br>';
    echo '<a href="index.html">klik hier om terug te gaan naar het formulier</a> <br>';
}
?>