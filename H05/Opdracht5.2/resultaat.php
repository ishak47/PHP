<?php

if($_POST['voornaam'] == "") {
    echo "je moet nog een voornaam invullen";
    echo "<a href=\"index.html\"> Terug naar het formulier</a>";
}

if($_POST['adres'] == "") {
    echo "je moet nog een adres invullen";
    echo "<a href=\"index.html\"> Terug naar het formulier</a>";
}

if($_POST['email'] == "") {
    echo "je moet nog een email invullen";
    echo "<a href=\"index.html\"> Terug naar het formulier</a>";
}

if($_POST['wachtwoord'] == "") {
    echo "je moet nog een wachtwoord invullen";
    echo "<a href=\"index.html\"> Terug naar het formulier</a>";
}
