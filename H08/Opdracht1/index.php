<?php

class Radioprogramma{
    private $ProgrammaNaam;
    private $Omschrijving;
    private $Liedjes = array();

public function setProgramma() {
    $this->ProgrammaNaam ='<h1>Gimma</h1>';
    $this->Omschrijving = '<h3>Dit is het nieuwste album van josylvio </h3>';
    echo $this->ProgrammaNaam . '<br>';
    echo $this->Omschrijving . '<br>';
}

public function setLiedjes ($ingevuldeLiedjes){
    if (is_array($ingevuldeLiedjes)) $this->Liedjes = $ingevuldeLiedjes;
}

public function getLiedjes() {
    foreach ($this->Liedjes as $value){
        echo $value . "<br>";
    }
}
}

$ProgrammaInfo = new Radioprogramma();
$ProgrammaInfo->setProgramma();
$ProgrammaInfo->setLiedjes(array("game over", "bankrekening", 'gimma', 'no love', 'vroeger'));
$ProgrammaInfo->getLiedjes();

