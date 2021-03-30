<?php
session_start();

if (isset($_SESSION["gebruiker"]) && $_SESSION["gebruiker"]["rol"] == "Administrator") {
    echo "<h1>Welkom ".$_SESSION["gebruiker"]["naam"]." op het admingedeelte van de website </h1>";
    echo "<p><a href='login.php'>Loginscherm</a></p>";
} else {
    header('location: login.php');
}
