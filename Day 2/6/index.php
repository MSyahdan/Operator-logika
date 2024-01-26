<?php

$bb = 44;
$tb = 148;
$imt = $bb / (($tb/100) **2);

    if($imt < 18.5){
        echo "Berat Kurang";
    }else if(($imt >= 18.5) && ($imt <= 25)){
        echo "Berat Badan Normal";
    }else if(($imt > 24.9) && ($imt <=30)){
        echo "Berat Badan Berlebih";
    }else
    {
        echo "Berat Badan Obesitas";
    }
 