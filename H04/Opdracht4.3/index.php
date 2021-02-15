<?php

function omdraaien($woord){
    if (is_string($woord)== 1){
        return strrev($woord);
    }else{
        echo "dat is geen woord";
    }
}
echo omdraaien('ishak jmilou');