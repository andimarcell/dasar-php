<?php
$nama = "John Doe"; // string

// manipulasi string
$text = "belajar php itu menyenangkan";

echo "panjang karakter: " . strlen($text) . "<br>";
echo "<br>";
echo "Huruf besar: " . strtoupper($text) . "<br>";
echo "<br>";
echo "Huruf kecil: " . strtolower($text) . "<br>";
echo "<br>";
echo "Huruf pertama kapital: " . ucfirst($text) . "<br>";
echo "<br>";
echo "Huruf pertama setiap kata kapital: " . ucwords($text) . "<br>";
echo "<br>";
echo "String dibalik: " . strrev($text) . "<br>";
echo "<br>";
echo "String setelah penggantian: " . str_replace("menyenangkan", "CODEPOLITAN", $text) . "<br>";
echo "<br>";
echo "String diulangi: " . str_repeat($text, 2) . "<br>"; // mengulangi string sebanyak 2 kali