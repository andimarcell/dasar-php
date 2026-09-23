<?php
$nilai = 90;
if ($nilai >= 90) {
    echo "Nilai A";
} elseif ($nilai >= 80 && $nilai < 89) {
    echo "Nilai B";
} else if ($nilai >= 70 && $nilai < 79) {
    echo "Nilai C";
} else {
    echo "Nilai tidak valid";
}
