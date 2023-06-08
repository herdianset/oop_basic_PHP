<?php

$con = mysqli_connect('localhost','root','','ba215_db'); // hostname, username, password, database

if ($con) {
    // echo "Koneksi ke database berhasil";
} else {
    echo "Koneksi ke database gagal";
}
