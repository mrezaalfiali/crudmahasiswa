<h1>Data Mahasiswa</h1>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Tanggal Lahir</th>
            <th scope="col">Fakultas</th>
            <th scope="col">Prodi</th>
            <th scope="col">Alamat</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $search = mysqli_real_escape_string($link, $_GET['search']);
            $query = "SELECT * FROM datamahasiswa WHERE nim LIKE '%$search%' OR nama LIKE '%$search%' OR tempat_tanggal_lahir LIKE '%$search%' OR fakultas LIKE '%$search%' OR prodi LIKE '%$search%' OR alamat LIKE '%$search%' OR email LIKE '%$search%' ORDER BY id_mahasiswa ASC";
        } else {
            $query = "SELECT * FROM datamahasiswa ORDER BY id_mahasiswa ASC";
        }
        $resault = mysqli_query($link, $query);

        while ($data = mysqli_fetch_assoc($resault)) {
        ?>
        <tr>
            <td><?php echo $data['id_mahasiswa']; ?></td>
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['tempat_tanggal_lahir']; ?></td>
            <td><?php echo $data['fakultas']; ?></td>
            <td><?php echo $data['prodi']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td>
                <a class="icon-link icon-link-hover border border-dark rounded p-1" href="index.php?page=edit&id_mahasiswa=<?php echo $data['id_mahasiswa']; ?>">
                    <i class="bi bi-pencil-square text-dark"></i>
                </a>
                <a class="icon-link icon-link-hover border border-dark rounded p-1" href="prosesHapus.php?id_mahasiswa=<?php echo $data['id_mahasiswa']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                    <i class="bi bi-trash text-dark"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
