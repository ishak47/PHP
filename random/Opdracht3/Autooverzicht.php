<html lang="en">
<head>
    <title>MR Wheely</title>
    <meta charset="UTF-8">
    <link href="kleur.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
</body>

<div class="picture">
<?php
class Autooverzicht{

    private  $autoos;

    function __construct(){
        $this->autoos = [
            new Auto('Merk: audi', 102500.00,'//unsplash.it/200/198'),
            new Auto('Merk: ferrari',90000.00,'//unsplash.it/200/198'),
            new Auto('Merk: fiat',10000.00,'//unsplash.it/200/198')
        ];
    }

    function getAutoLijst(){
        return $this->autoos;
    }
}
?>
</div>
</html>
