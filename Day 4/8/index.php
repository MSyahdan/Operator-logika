<?php
$bilangan = array(75, 77, 87, 70, 90, 81, 69, 87, 66);

$kompeten = array();
$belum_kompeten = array();

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belum_kompeten[] = $nilai;
    }
}

echo "Kelompok Pertama (Kompeten): " . implode(', ', $kompeten) . "\n";
echo "Kelompok Kedua (Belum Kompeten): " . implode(', ', $belum_kompeten) . "\n";
