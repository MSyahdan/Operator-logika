<?php

$waktu1 = "19.00";
$waktu2 = "08.55";

$waktu1_pm = (int)$waktu1 < 12 ? $waktu1 . " pm" 
            : ((int)$waktu1 == 12 ? $waktu1 . " pm" 
            : ((int)$waktu1 - 12) . ".00 pm");

$waktu2_am = (int)$waktu2 < 12 ? $waktu2 . " am" 
            : ((int)$waktu2 == 12 ? $waktu2 . " pm" 
            : ((int)$waktu2 - 12) . ".00 am");

echo "Waktu 1: " . $waktu1_pm . "\n";
echo "Waktu 2: " . $waktu2_am;

