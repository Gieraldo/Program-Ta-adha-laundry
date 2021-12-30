<?php
include '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM pakaian WHERE pakaian_id='$id'");

// mysqli_query($koneksi, "DELETE FROM pakaian_satuan WHERE pakaiansatuan_id='$id'");

header('location: ../pakaiansatuan.php');