<?php



function hari_ini($tanggal){
    $day = date('l', strtotime($tanggal));
    switch($day){
        case 'Sunday':
            $hari_ini = "Minggu";
            break;

        case 'Monday':			
            $hari_ini = "Senin";
            break;

        case 'Tuesday':
            $hari_ini = "Selasa";
            break;

        case 'Wednesday':
            $hari_ini = "Rabu";
            break;

        case 'Thursday':
            $hari_ini = "Kamis";
            break;

        case 'Friday':
            $hari_ini = "Jumat";
            break;

        case 'Saturday':
            $hari_ini = "Sabtu";
            break;

        default:
            $hari_ini = "Tidak di ketahui";		
            break;
    }

    return "<b>" . $hari_ini . "</b>";
}

echo "Hari ini adalah ". hari_ini(date('Y-m-d'));