<?php
include("koneksi.php");

if (isset($_POST["update"])) {
    $id_matakuliah = $_POST["id_matakuliah"];
    $kode_matakuliah = $_POST["kode_matakuliah"];
    $nama_matakuliah = $_POST["nama_matakuliah"];
    $sks = $_POST["sks"];

    $query = "UPDATE matakuliah SET kode_matakuliah='$kode_matakuliah', nama_matakuliah='$nama_matakuliah', sks='$sks' WHERE id_matakuliah='$id_matakuliah'";

    $result = mysqli_query($link, $query);

    if ($result) {
        header('Location: index.php?page=matakuliah&pesan=2');
    }
}
?>
