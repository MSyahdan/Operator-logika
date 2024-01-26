<?php

$jamkerja =8;
$kompensasi = 30000;
$waktukerja =14;
if ($waktukerja > $jamkerja){
    echo"kompensasi yg didapat adalah rp: ".$kompensasi * ($waktukerja-$jamkerja);

}else{
    echo "Tidak dapat kompensasi";
    
}