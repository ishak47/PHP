<?php

$kappersagenda= "";
$afspraak = "";
$tijd = "";



print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $tijd => $afspraak) {
    if($afspraak == "") {
        print("<li>".$tijd."</li>") ;
    }
}
print ("</ul>");