<?php
$nama = "John Doe"; // string

// manipulasi string
$text = "belajar php itu menyenangkan";

echo strLen($text); // panjang karakter

echo strtoupper($text); // mengubah menjadi huruf besar

echo strtolower($text); // mengubah menjadi huruf kecil

echo ucfirst($text); // mengubah huruf pertama menjadi kapital

echo ucwords($text); // mengubah huruf pertama setiap kata menjadi kapital

echo strrev($text); // membalikkan string

echo str_replace("menyenangkan", "CODEPOLITAN", $text); // mengganti kata tertentu dengan kata lain

echo str_repeat($text, 2); // mengulangi string sebanyak 2 kali