<?php 
include ("koneksi.php");

if (isset($_GET['query'])) {
    $search_query = $_GET['query'];
    $query = "SELECT * FROM datamahasiswa WHERE nama LIKE '%$search_query%' OR nim LIKE '%$search_query%' OR jurusan LIKE '%$search_query%' OR alamat LIKE '%$search_query%' OR email LIKE '%$search_query%'";
    $result = mysqli_query($link, $query);
}
?>

<h1>Hasil Pencarian</h1>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if (isset($result)) {
            while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $data['id_mahasiswa']; ?></td>
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jurusan']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td>
                <a class="icon-link icon-link-hover" href="editData.php?id=<?php echo $data['id_mahasiswa']; ?>">
                    <i class="bi bi-pencil-square"></i>
                </a> | 
                <a class="icon-link icon-link-hover" href="deleteData.php?id=<?php echo $data['id_mahasiswa']; ?>">
                    <i class="bi bi-trash"></i>
                </a>
            </td>
        </tr>
        <?php 
            } 
        }
        ?>
    </tbody>
</table>
