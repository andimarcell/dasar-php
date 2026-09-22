<?php
    if(isset($_POST['upload'])){
        // ambil informasi file $_FILES
        $namaFile = $_FILES['foto']['name'];
        $tmpFile = $_FILES['foto']['tmp_name'];
        $folderTujuan = "uploads/" . $namaFile;

        // kalau folder belum ada, bikin ini dulu
        if(!is_dir("uploads")){
            mkdir("uploads");
        }
        move_uploaded_file($tmpFile, $folderTujuan);
        echo "File berhasil diupload.";
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form enctype="multipart/form-data" method="POST">
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="alamat" placeholder="Alamat">
        <input type="file" name="foto">
        <button type="submit" name="upload">
            Upload
        </button>
    </form>
</body>
</html>