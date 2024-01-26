<?php
$total_tabungan = 850000;

$total_tabungan > 500000 ? $bunga = $total_tabungan * 0.05 : $bunga = 0;
$saldo_tabungan = $total_tabungan + $bunga;

echo "Total tabungan Andi: Rp. " . number_format($total_tabungan);
echo "Bunga yang diterima: Rp. " . number_format($bunga);
echo "Saldo tabungan setelah bunga: Rp. " . number_format($saldo_tabungan);