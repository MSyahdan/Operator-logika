<?php
$barang = [
    [
        'nama' => 'Ban', 
        'diskon' => '10'
    ],
    [
        'nama' => 'oli mesin'],
    [
        'nama' => 'kampas rem'
    ],
    [
        'nama' => 'busi', 
        'diskon' => '9'
    ],
    [
        'nama' => 'akumulator', 
        'diskon' => '7'
    ],
];

$barangDiskon = array_filter($barang, function ($item){
    return isset($item['diskon']);
});

foreach ($barangDiskon as $barang) {
    echo" Nama : $barang[nama]<br>";
    echo" Diskon : $barang[diskon]<br>";
    echo '<br>';
}
