<?php

$nasigoreng = 15000;
$ayambakar = 20000;
$nasikebuli = 25000;
$totalpembelian = ($nasikebuli*2)+$ayambakar+($nasigoreng*2);
$day = date("l");
if ($day == "Friday"){
    echo"total pembayaran setelah 5%". $totalpembelian-($totalpembelian/0.05);
}
else if ($day == "Monday"){
    echo"total pembayaran setelah 2%". $totalpembelian-($totalpembelian/0.02);
}
else {
    echo "pembayaran tidak mendapatkan diskon, total pembayaran adalah".$totalpembelian;
}