<?php
$koneksi = mysqli_connect('localhost', 'root','','db_srikaryalaundry');

if (mysqli_connect_error()){
    echo "Koneksi Ke Database Gagal : ".mysqli_connect_error();
}