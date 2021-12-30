<?php
include "../../koneksi.php";
$namapakaian = $_POST['namapakaian'];
mysqli_query($koneksi, "insert into pakaian set pakaian_jenis='$namapakaian'");


// $namapakaiansatuan = $_POST['namapakaiansatuan'];

// mysqli_query($koneksi, "insert into pakaian_satuan set namapakaiansatuan='$namapakaiansatuan'");

header('location:../add_pakaiansatuan.php?pesan=berhasil');