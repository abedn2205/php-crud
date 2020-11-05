<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;
    $merk = htmlspecialchars($data["merk"]);
    $model = htmlspecialchars($data["model"]);
    $harga = htmlspecialchars($data["harga"]);
    $buatan = htmlspecialchars($data["buatan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    //query insert data
    $query = "INSERT INTO sepatu VALUES (
        '','$merk', '$model','$harga','$buatan','$gambar'
    )";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM sepatu WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $merk = htmlspecialchars($data["merk"]);
    $model = htmlspecialchars($data["model"]);
    $harga = htmlspecialchars($data["harga"]);
    $buatan = htmlspecialchars($data["buatan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    //query insert data
    $query = "UPDATE sepatu SET
                merk = '$merk',
                model = '$model',
                harga = '$harga',
                buatan = '$buatan',
                gambar = '$gambar'
            WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
