<?php
$students = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Danii',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

$nilai_total = [];
$nilai_rata_rata = [];

foreach ($students as $student) {
    $nilai_total[$student['nama']] = array_sum($student['nilai']);
    $nilai_rata_rata[$student['nama']] = $nilai_total[$student['nama']] / count($student['nilai']);
}

foreach ($students as $student) {
    $nama = $student['nama'];
    $total = $nilai_total[$nama];
    $rata_rata = $nilai_rata_rata[$nama];

    echo "Nama: $nama, Total Nilai: $total, Rata-rata: $rata_rata\n" ;
    echo "<br>";
}
