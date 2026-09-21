<?php

$buah = ["apel", "jeruk", "mangga", "pisang", "wortel", "kol", "bayam", "kangkung", "semangka", "melon"];
$sayur = ["bayam", "kangkung", "wortel", "kol"];
$tanaman = array_merge($buah, $sayur); // menggabungkan dua array
$tanaman2 = array_unique($tanaman); // menghapus elemen yang sama pada array
$tanaman3 = array_diff($buah, $sayur); // menghapus elemen yang sama pada array
$tanaman4 = array_intersect($buah, $sayur); // mengambil elemen yang sama pada array

array_push($buah, "semangka", "melon"); // menambahkan elemen di akhir array

array_pop($buah); // menghapus elemen terakhir dari array

echo count($buah) . "<br>"; // menghitung jumlah elemen array

echo implode(", ", $buah) . "<br>"; // mengubah array menjadi string

echo array_search("kangkung", $sayur) . "<br>"; // mencari index dari elemen array

echo implode(", ", $tanaman) . "<br>"; // mengubah array menjadi string

echo implode(", ", $tanaman2) . "<br>"; // mengubah array menjadi string

echo implode(", ", $tanaman3) . "<br>"; // mengubah array menjadi string

echo implode(", ", $tanaman4) . "<br>"; // mengubah array menjadi string

// echo $buah[0] . ", " . $buah[1] . ", " . $buah[2] . ", " . $buah[3] . ", " . $buah[4];