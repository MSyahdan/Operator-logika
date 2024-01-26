<?php
//berikut adalah daftar belannja yang Beni beli di minimarket Eko. Hitunglah berapa yang perlu Beni bayar?
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => '18000',
        'jimblah_beli' =>'1',
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => '5000',
        'jimblah_beli' => '3',
    ],
    [
        'nama_barang' => 'Aloe Vera Shaet Mask',
        'harga_barang' => '15000',
        'jimblah_beli' => '5',
    ]
];


foreach ($barang as $kunci => $isi) {
    echo " Barang : $isi[nama_barang]<br>";
    echo " Harga : $isi[harga_barang]<br>";
    echo " Jumblah : $isi[jimblah_beli]<br>";
    echo "<br>";
}

echo "yang beni harus bayar:";
?>

<?php
//berikut adalah daftar belannja yang Beni beli di minimarket Eko. Hitunglah berapa yang perlu Beni bayar?
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => '18000',
        'jimblah_beli' =>'1',
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => '5000',
        'jimblah_beli' => '3',
    ],
    [
        'nama_barang' => 'Aloe Vera Shaet Mask',
        'harga_barang' => '15000',
        'jimblah_beli' => '5',
    ]
];

$total_pembayaran = 0; 

foreach ($barang as $key => $isi) {
    $total_barang = $isi['harga_barang'] * $isi['jimblah_beli'];
    $total_pembayaran += $total_barang;

    echo " Barang : $isi[nama_barang]<br>";
    echo " Harga : $isi[harga_barang]<br>";
    echo " Jumblah : $isi[jimblah_beli]<br>";
    echo " Total : $total_barang<br>";
    echo "<br>";
}

echo "Yang Beni harus bayar: $total_pembayaran";
?>