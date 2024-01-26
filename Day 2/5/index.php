<?php

$andi = 2004;
$eko = 2001;
if ($andi %4== 0 && $eko %4== 0) {
    echo "keduanya sama ";
    }else if ($andi %4== 0){
        echo "hanya andi";
    }elseif ($eko %4== 0){
        echo "hanya eko";
        
    }else{
        echo "keduanya tidak";
    }