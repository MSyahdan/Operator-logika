<?php

$bilangan = 225;
$kelipatan_awal = 5;
$kelipatan_akhir = 25;
$kemungkinan_dibagi_habis = 0;

for ($i = $kelipatan_awal; $i <= $kelipatan_akhir; $i += 5)
$kemungkinan_dibagi_habis += !($bilangan % $i);
echo "bilangan $bilangan bisa dibagi habis oleh bilangan kelipatan 5 sebanyak $kemungkinan_dibagi_habis kali";
    
 