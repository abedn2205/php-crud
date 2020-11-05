<?php
require 'functions.php';
// mengecek apakah tombol submit sudah di tekan atau belu
if (isset($_POST["submit"])) {

    //cek apakah data berhasil di input atau tidak
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil ditambahkan');
        document.location.href = 'index.php'
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal ditambahkan');
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
    <title>Tambah Data Sepatu</title>
</head>

<body>
    <h1>Form Tambah Sepatu</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="merk">Merk</label>
                <input type="text" name="merk" id="merk" autocomplete="off">
            </li>
            <li>
                <label for="model">Model</label>
                <input type="text" name="model" id="model" autocomplete="off">
            </li>
            <li>
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" required autocomplete="off">
            </li>
            <li>
                <label for="buatan">Buatan</label>
                <input type="text" name="buatan" id="buatan" autocomplete="off">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar" autocomplete="off">
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>

</html>