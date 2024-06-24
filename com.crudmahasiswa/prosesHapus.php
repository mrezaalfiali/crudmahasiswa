<?php
include("koneksi.php");

if (isset($_GET['id_mahasiswa'])) {
    $id_mahasiswa = $_GET['id_mahasiswa'];

    // Query to delete the record
    $query = "DELETE FROM datamahasiswa WHERE id_mahasiswa = $id_mahasiswa";
    $result = mysqli_query($link, $query);

    if ($result) {
        header('Location: index.php?page=data&pesan=3');
    } else {
        echo "Error deleting record: " . mysqli_error($link);
    }
}
?>
