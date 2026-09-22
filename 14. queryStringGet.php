<!DOCTYPE html>
<?php
$nama = $_GET['nama']; // mengambil nilai parameter 'nama' dari query string
$alamat = $_GET['alamat']; // mengambil nilai parameter 'alamat' dari query string
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="alamat" placeholder="Alamat">
        <button type="submit">Submit</button>
    </form>

    <h1>Selamat Datang, <?php echo $nama; ?></h1>
    <h2>Alamat: <?php echo $alamat; ?></h2>
    <p>Kita akan belajar dasar PHP</p>
</body>
</html>