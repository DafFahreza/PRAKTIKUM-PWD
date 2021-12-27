<?php
require_once "koneksi.php";
include "akses_mhs.php";

if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $sql = "select * from mahasiswa where nama like '%" . $cari . "%'";
    $query = mysqli_query($con, $sql);
} else {
    $sql = "select * from mahasiswa";
    $query = mysqli_query($con, $sql);
}

while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

header('content-type:application/json');
echo json_encode($data);

mysqli_close($con);
