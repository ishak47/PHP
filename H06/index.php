<?php

$host = 'localhost';
$port = '3306';
$user = 'root';
$password = '';
$db = 'school';

try {
    $dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port , $user,$password);
    foreach ($dbh->query('SELECT * from cursist') as $row) {
    print_r($row);
    }
    $dbh = null;
} catch (PDOException $e){
    print "ERROR!: " . $e->getMessage() . "<br/>";
    die();
}
?>