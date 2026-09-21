<?php

// $mahasiswa = ["aditya" => ["aditya", 24, "informatika"],"fakhri" => ["fakhri", 25, "teknologi informasi"] ];

// echo $mahasiswa["aditya"][0] . ", " . $mahasiswa["aditya"][1] . ", " . $mahasiswa["aditya"][2] . "<br>";

$mahasiswa = [
    [
        "nama" => "aditya",
        "umur" => 24,
        "jurusan" => "informatika"
    ],
    [
        "nama" => "fakhri",
        "umur" => 25,
        "jurusan" => "teknologi informasi"
    ],
    [
        "nama" => "adit",
        "umur" => 24,
        "jurusan" => "informatika"
    ]
];
echo $mahasiswa[1]["umur"] . "<br>";
echo $mahasiswa[0]["nama"] . ", " . $mahasiswa[0]["umur"] . ", " . $mahasiswa[0]["jurusan"] . "<br>";
echo $mahasiswa[1]["nama"] . ", " . $mahasiswa[1]["umur"] . ", " . $mahasiswa[1]["jurusan"] . "<br>";
echo $mahasiswa[2]["nama"] . ", " . $mahasiswa[2]["umur"] . ", " . $mahasiswa[2]["jurusan"] . "<br>";