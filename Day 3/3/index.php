<?php

$hariIni = date('l');
$upacara = ($hariIni == 'Monday') ? 'Hari ini ada upacara' : 'Hari ini tidak ada upacara';
echo "hari ini adalah hari $hariIni maka hari ini $upacara";