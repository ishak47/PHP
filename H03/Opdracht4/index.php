<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <title>
    </title>
</head>
</html>

<?php
for ($i = 1; $i <=9; $i++){
    if ($i %2 == 0){
        $class = "class='rood'";
    }else{
        $class = "class='groen'";
    }
    echo "<img ".$class."src='apen/aap".$i.".jpg'>";
}
