<?php
    session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Administrator") {
    echo "<h1>Welkom ".$_SESSION["user"]. " op het admingedeelte van de website";
    echo "<p><a href='index.php'>Loginscherm</a></p>";
} else {
    header('location: login.php');
}
?>