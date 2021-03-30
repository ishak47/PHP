<?php
session_start();

$gebruikers = array(
    "Ishak" => array("pwd" => "1234", "rol" => "Administrator"),
    "Timo" => array("pwd" => "4321", "rol" => "Administrator"),
    "Dylan" => array("pwd" => "2004", "rol" => "Gebruiker"),
);

if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_POST['knop'])
    && isset($gebruikers[$_POST["login"]])
    && $gebruikers[$_POST["login"]] ["pwd"] == $_POST['pwd']) {
    $_SESSION["gebruiker"] = array("naam" => $_POST["login"],
                                   "pwd" => $gebruikers[$_POST["login"]]['pwd'],
                                   "rol" => $gebruikers[$_POST["login"]]['rol']);
    $message = "Welkom ".$_SESSION["gebruiker"]["naam"]." met de rol ".$_SESSION["gebruiker"]["rol"];
} else {
    $message = "Welkom bij mijn inlogscherm!";
}
?>

<html>
<body>
<h1><?php echo $message; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label for="login">Login: </label>
        <input type="text" name="login" value="">
    </div>
    <div class="form-group">
        <label for="pwd">Password: </label>
        <input type="password" name="pwd" value="">
    </div>
    <br>
    <input type="submit" name="knop">
</form>
<p><a href="website.php">Website</a></p>
<p><a href="login.php?loguit">Uitloggen</a></p>
<p><a href="admin.php">Admin</a></p>
</body>
</html>
