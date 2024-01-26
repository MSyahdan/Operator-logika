<?php
$keterangan = 'sakit';
$kehadiran = 100;
echo $keterangan  =='sakit' || $keterangan == 'izin' ? 100-3 : ($keterangan == 'alfa' ? 100-5 : 100);