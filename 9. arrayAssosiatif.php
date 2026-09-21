<?php

$mahasiswa = ["nama" => "adit", "umur" => 24, "Hobi" => ["makan", "minum", "tidur"], "alamat" => ["jalan" => "jl. raya", "kota" => "bandung", "provinsi" => "jawa barat"]];

echo $mahasiswa["nama"] . ", " . $mahasiswa["umur"] . ", " . $mahasiswa["Hobi"][0] . ", " . $mahasiswa["Hobi"][1] . ", " . $mahasiswa["Hobi"][2] . ", " . $mahasiswa["alamat"]["jalan"] . ", " . $mahasiswa["alamat"]["kota"] . ", " . $mahasiswa["alamat"]["provinsi"];