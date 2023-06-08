<?php
$nim = $_GET['nim'];
//include class mahasiswa
include "class/mahasiswa_class.php";
//object mahasiswa
$mhs = new mahasiswa();
$exec = $mhs->deleteMahasiswa($nim);

if ($exec) {
    echo "<script>alert('Data berhasil dihapus'); window.location = 'data.php'; </script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location = 'data.php'; </script>";
}
