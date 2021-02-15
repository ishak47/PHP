<?php

function delendoor3($getal){
    if ($getal %3 == 0){
        $deelbareGetal = true;
    }else{
        $deelbareGetal = false;
        echo "niet deelbareGetal door 3";
    }
    return $deelbareGetal;
}
echo delendoor3(12);
