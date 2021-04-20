<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>aftekenen php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
$getal = 11;

for ($i = 0; $i < $getal; $i++){
    echo $i. "<br>";
    if ($i == 5) {
        echo "we zijn halverwege"."<br>";
    }
}

?>
</body>
</html>
