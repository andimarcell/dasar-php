<!-- <?php
$umur = 15;
$status = "pengangguran";
$sekolah = "SMA";
if ($umur <= 17) {
    if ($status == "pelajar") {
        if ($sekolah == "SMA") {
            echo "Diskon 50%";
        } else {
            echo "Sekolah harus SMA";
        }
    } else {
        echo "Status harus pelajar";
    }
} else {
    echo "Umur harus di bawah 17 tahun";
}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF Bersarang</title>
</head>

<body>
    <form action="" method="post">
        <input type="umur" placeholder="Umur" name="umur">
        <input type="status" placeholder="Status" name="status">
        <input type="sekolah" placeholder="Sekolah" name="sekolah">
        <button type="submit" value="Submit">Cek Diskon</button>
    </form>
    <?php
    $umur = $_POST['umur'] ?? 0;
    $status = $_POST['status'] ?? "";
    $sekolah = $_POST['sekolah'] ?? "";
    if ($umur <= 17) {
        if ($status == "pelajar") {
            if ($sekolah == "SMA") {
                echo "Diskon 50%";
            } else {
                echo "Sekolah harus SMA";
            }
        } else {
            echo "Status harus pelajar";
        }
    } else {
        echo "Umur harus di bawah 17 tahun";
    }
    ?>
</body>

</html>