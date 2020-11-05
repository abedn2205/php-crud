<?php
require 'functions.php';

//ambil data di url
$id = $_GET["id"];

//query data berdasarkan id
$spt = query("SELECT * FROM sepatu WHERE id = $id")[0];


// mengecek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di ubah');
        document.location.href = 'index.php'
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal diubah');
        document.location.href = 'index.php'
        </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Sepatu</title>
</head>

<body>
    <h1>Form Ubah Sepatu</h1>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $spt["id"]; ?>">
        <ul>
            <li>
                <label for="merk">Merk</label>
                <input type="text" name="merk" id="merk" required value="<?= $spt["merk"]; ?>">
            </li>
            <li>
                <label for="model">Model</label>
                <input type="text" name="model" id="model" required value="<?= $spt["model"]; ?>">
            </li>
            <li>
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" required value="<?= $spt["harga"]; ?>">
            </li>
            <li>
                <label for="buatan">Buatan</label>
                <input type="text" name="buatan" id="buatan" required value="<?= $spt["buatan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar" required value="<?= $spt["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah</button>
            </li>
        </ul>
    </form>
</body>

</html>