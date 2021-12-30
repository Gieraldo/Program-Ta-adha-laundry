<?php include 'header.php';?>


<div class="container">
    <div class="col-md-12">
        <?php
        if (isset($_GET['pesan'])){
            if ($_GET['pesan'] == 'berhasil'){
                echo "<div class=\"alert alert-success text-center\"><h4>Data Berhasil Diperbarui</h4><a href=\"pakaiansatuan.php\" class=\"btn-sm btn-success\">Lihat Data</a></div>";
            } else{
                echo "<div class=\"alert alert-danger text-center\"><h4>Data Berhasil Gagal Diperbarui</h4></div>";
            }
        }
        ?>
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Pakaian</h4>
            </div>
            <div class="card-body">
                <?php
                include '../koneksi.php';
                $id=$_GET['id'];
                $data = mysqli_query($koneksi, "select * from pakaian where pakaian_id='$id'");
                $hasil = mysqli_fetch_all($data);
                foreach ($hasil as $item){
                ?>
                <form action="setting/edit_pakaiansatuans.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $item[0];?>">
                    <div class="form-group">
                        <label for=""><b>Nama Pakaian satuan:</b></label>
                        <input type="text" name="namapakaian" class="form-control" value="<?php echo $item['2'];?>" placeholder="Masukkan Nama Pakaian satuan" required>
                    </div>

                
                    <div class="form-group">
                        <input type="submit" value="Perbarui Data" class="btn btn-primary">
                    </div>
                    <div class="form-group">
                        <a href="pakaiansatuan.php">< Kembali</a>
                    </div>
                </form>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
