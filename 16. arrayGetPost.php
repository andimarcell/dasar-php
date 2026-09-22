<?php
print_r($_POST); // menampilkan isi array $_POST

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parsing Array</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="alamat" placeholder="Alamat">
        <select name="jurusan">
            <option value="informatika">informatika</option>
            <option value="teknologi informasi">teknologi informasi</option>
            <option value="teknik elektro">teknik elektro</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>

</html>