<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDASI FORM</title>
</head>

<body>
    <!-- <form method="POST" action="18. hasilValidasi.php"> -->
        <form method="POST" action="">
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="alamat" placeholder="Alamat">
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['nama'])) {
        if (empty($_POST['nama']) || empty($_POST['alamat'])) {
            echo "Semua field wajib diisi";
        } else {
            echo "Selamat Datang, " . $_POST['nama'];
        }
    }
    ?>
</body>
</html>