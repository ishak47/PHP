<?php

class Autooverzicht{

    private  $autoos;

    function __construct(){
        $this->autoos = [
            new Auto('audi',102500.00,'//unsplash.it/200/198'),
            new Auto('ferrari',90000.00,'//unsplash.it/200/198'),
            new Auto('fiat',10000.00,'//unsplash.it/200/198')
        ];
    }

    function getAutoLijst(){
        return $this->autoos;
    }

    function voegAutoToe(){

    }
}
?>