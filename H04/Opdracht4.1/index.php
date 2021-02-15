<?php

function gradenCelciusNaarFarenheit(){
    $celcius = 1;
    $farenheit= $celcius * 1.8 + 32;
    return $farenheit;
}
echo gradenCelciusNaarFarenheit();