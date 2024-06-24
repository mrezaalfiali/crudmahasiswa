<h1>Data Mata Kuliah</h1>
<!-- <a class="btn btn-primary" href="?page=entryMatakuliah" role="button">Tambah</a> -->
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Kode Mata Kuliah</th>
            <th scope="col">Nama Mata Kuliah</th>
            <th scope="col">SKS</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $query = "SELECT * FROM matakuliah ORDER BY id_matakuliah ASC";
        $resault = mysqli_query($link, $query);

        while ($data = mysqli_fetch_assoc($resault)) {
        ?>
        <tr>
            <td><?php echo $data['id_matakuliah']; ?></td>
            <td><?php echo $data['kode_matakuliah']; ?></td>
            <td><?php echo $data['nama_matakuliah']; ?></td>
            <td><?php echo $data['sks']; ?></td>
            <td>
                <a class="icon-link icon-link-hover border border-dark rounded p-1" href="index.php?page=editMatakuliah&id_matakuliah=<?php echo $data['id_matakuliah']; ?>">
                    <i class="bi bi-pencil-square text-dark"></i>
                </a> 
                <a class="icon-link icon-link-hover border border-dark rounded p-1" href="prosesHapusMatakuliah.php?id_matakuliah=<?php echo $data['id_matakuliah']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                    <i class="bi bi-trash text-dark"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>