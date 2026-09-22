<?php
if (isset($_POST['nama'])) {
    if (empty($_POST['nama']) || empty($_POST['alamat'])) {
        echo "Semua field wajib diisi";
    } else {
        echo "Selamat Datang, " . $_POST['nama'];
    }
}
