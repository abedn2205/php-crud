<?php
require 'functions.php';

$sepatu = query("SELECT*FROM sepatu");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sepatu</title>
</head>

<body>
    <h1>Daftar Sepatu</h1>

    <a href="tambah.php">Insert Product</a>
    <br></br>

    <table border="1" cellpading="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Merk</th>
            <th>Model</th>
            <th>Harga</th>
            <th>Buatan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($sepatu as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda ingin menghapus!')">Hapus</>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="75" alt="gambar.jpg"></td>
                <td><?= $row["merk"]; ?></td>
                <td><?= $row["model"]; ?></td>
                <td>Rp. <?= $row["harga"]; ?></td>
                <td><?= $row["buatan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>


    </table>
</body>

</html>