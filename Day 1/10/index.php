<?php
$total = 157000;
if  ($total >= 100000) {
    $discount=(($total*7)/100);
    $total_bayar=($total-$discount);
    echo"jumlah bayar $total_bayar";
    

    }

    else {
        echo "tidak dapat diskon";
    }
