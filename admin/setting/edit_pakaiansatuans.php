<?php
include '../../koneksi.php';

$id = $_POST['id'];
$namapakaian = $_POST['namapakaian'];


mysqli_query($koneksi, "UPDATE pakaian SET pakaian_jenis='$namapakaian' WHERE pakaian_id='$id'");
header("location: ../edit_pakaiansatuan.php?pesan=berhasil&id=$id");


// $id = $_POST['id'];
// $namapakaiansatuan = $_POST['namapakaiansatuan'];


// mysqli_query($koneksi, "UPDATE pakaian_satuan SET namapakaiansatuan='$namapakaiansatuan' WHERE pakaiansatuan_id='$id'");
// header("location: ../edit_pakaiansatuan.php?pesan=berhasil&id=$id");
?>