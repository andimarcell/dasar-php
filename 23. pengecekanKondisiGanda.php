<?php
// $ukuran = "XL";
// $warna = "merah";
// $harga = 70000;

// if ($ukuran == "XL" && $warna == "merah") {
//     $biaya_tambahan = 5000;
//     echo "biaya tambahan yang dikenakan adalah " . $biaya_tambahan . "<br>";
//     echo "harga awal adalah " . $harga . "<br>";
//     $total_biaya = $harga + $biaya_tambahan;

//     echo "biaya yang dikenakan adalah" . $total_biaya;
// } else {
//     echo "biaya yang dikeluarkan adalah " . $harga;
// }

    $tujuan = "malang";
    $harga = 300000;
    $diskon = 150000;

    if ($tujuan == "Jakarta" || $tujuan == "Bandung") {
        $total_biaya = $harga - $diskon;
        echo "biaya yang dikenakan adalah " . $total_biaya;
    } else {
        echo "biaya yang dikeluarkan adalah " . $harga;
    }