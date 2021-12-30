<?php include 'header.php';?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Data Pelanggan</h4>
        </div>
        <div class="card-body">
            <a href="add_pelanggan.php" class="btn btn-sm btn-info float-lg-right">Tambah</a>
            <br>
            <br>
            <table id="data-tabel" class="table table-bordered table-striped" width="100%">
                <thead>
                    <tr>
                    <th width="1%">No</th>
                    <th>ID Pelanggan</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>No. HP</th>
                    <th>OPSI</th>
                </tr>
                </thead>
                
                <tbody>
                <?php
                include '../koneksi.php';
                $query = mysqli_query($koneksi, 'select * from pelanggan');
                $result = mysqli_fetch_all($query);
                $counter = 1;
                foreach ($result as $item) {

                ?>
                <tr>
                    <td><?php echo $counter; ?></td>
                    <td><?php echo "KP-".$item[0];?></td>
                    <td><?php echo $item[1];?></td>
                    <td><?php echo $item[3];?></td>
                    <td><?php echo $item[2];?></td>
                    <td c>
                        <a href="edit_pelanggan.php?id=<?php echo $item[0];?>" class="btn btn-sm btn-info">Edit</a>
                        <a href="setting/hapus.php?id=<?php echo $item[0];?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?')">Hapus</a>
                    </td>
                </tr>
                <?php
                    $counter++;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
