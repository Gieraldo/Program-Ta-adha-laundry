<?php include 'header.php';?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Data Pakaian </h4>
        </div>
        <div class="card-body">
            <a href="add_pakaiansatuan.php" class="btn btn-sm btn-info float-lg-right">Tambah</a>
            <br>
            <br>
            <table id="data-tabel" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th width="1%">No</th>
                    <th>ID PAKAIAN</th>
                    <th>NAMA PAKAIAN </th>
                    <th>OPSI</th>
                </tr>
                 </thead>
                  <tbody>
                <?php
                include '../koneksi.php';
                $query = mysqli_query($koneksi, 'select * from pakaian');
                $result = mysqli_fetch_all($query);
                $counter = 1;
                foreach ($result as $item) {

                ?>
                <tr>
                    <td><?php echo $counter;?></td>
                    <td><?php echo "IDP-".$item[0];?></td>
                    <td><?php echo $item[2];?></td>
                    <td c>
                        <a href="edit_pakaiansatuan.php?id=<?php echo $item[0];?>" class="btn btn-sm btn-info">Edit</a>
                        <a href="setting/pakaiansatuan_hapus.php?id=<?php echo $item[0];?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?')">Hapus</a>
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
