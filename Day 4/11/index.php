<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompok1 = [];
$kelompok2 = [];

foreach ($bil1 as $bil) {
if (in_array($bil, $bil2)) {
    $kelompok1[] = $bil;

} else {
    $kelompok2[] = $bil;

}

}

foreach ($bil2 as $bil) {
    if (!in_array($bil, $bil1)) {
        $kelompok2[] = $bil;
    }
}
echo "Kelompok ke satu: " . implode(",", $kelompok1);
echo "<br>";
echo "Kelompok ke dua: " . implode(",", $kelompok2);