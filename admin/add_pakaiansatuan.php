<?php include 'header.php';?>
<div class="container">
    <div class="col-md-12">
        <?php
        if (isset($_GET['pesan'])){
            if ($_GET['pesan'] == 'berhasil'){
                echo "<div class=\"alert alert-success text-center\"><h4>Data Berhasil Ditambahkan Kedalam Database</h4><a href=\"pakaiansatuan.php\" class=\"btn-sm btn-success\">Lihat Data</a></div>";
            } else{
                echo "<div class=\"alert alert-danger text-center\"><h4>Data Berhasil Gagal Ditambahkan Kedalam Database</h4></div>";
            }
        }
        ?>
        <div class="card">
            <div class="card-header">
                <h4>Tambah Pakaian satuan</h4>
            </div>
            <div class="card-body">
                <form action="setting/tambahpakaian_satuan.php" method="post">
                    <div class="form-group">
                        <label for=""><b>Nama Pakaian satuan:</b></label>
                        <input type="text" name="namapakaian" class="form-control" required>
                    </div>

                 
                    <div class="form-group">
                        <input type="submit" value="Tambah" class="btn btn-primary" required>
                    </div>
                    <div class="form-group">
                        <a href="pakaiansatuan.php"><< Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
