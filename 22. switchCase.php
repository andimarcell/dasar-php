<?php
$nilai = "D";
switch ($nilai) {
    case "A":
        echo "Nilai Anda Sangat Baik";
        break;
    case "B":
        echo "Nilai Anda Baik";
        break;
    case "C":
        echo "Nilai Anda Cukup";
        break;
    default:
        echo "Nilai Anda Tidak Terdapat Di Database";
        break;
}
