<?php
$student =[
 [
'nama' => 'Andi',
'rombel'=> 'PPLG XI-4',
'rayon'=> 'Ciawi 4',
'jk'=> 'L',
 ],
[
    'nama' => 'Sasa',
'rombel'=> 'PPLG XI-1',
'rayon'=> 'Sukasari 6',
'jk'=> 'P',
],
[
    'nama' => 'Lala',
'rombel'=> 'PPLG XI-3',
'rayon'=> 'Cisarua 3',
'jk'=> 'P',
],
[
    'nama' => 'Beni',
'rombel'=> 'PPLG XI-2',
'rayon'=> 'Cicurug 2',
'jk'=> 'L',
]
];

foreach ($student as $data) {
    echo "Nama: " . $data['nama'] . "<br>";
    echo "Rombel: " . $data['rombel'] . "<br>";
    echo "Rayon: " . $data['rayon'] . "<br>";
    echo "Jenis Kelamin: " . $data['jk'] . "<br><br>";
}
