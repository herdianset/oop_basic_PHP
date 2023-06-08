<?php

$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$kode_jurusan = $_POST['jurusan'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

//include class mahasiswa
include "class/mahasiswa_class.php";
//object mahasiswa
$mhs = new mahasiswa();

$data_update = [
    "nim" => $nim,
    "nama_mhs" => $nama_mhs,
    "kode_jurusan" => $kode_jurusan,
    "gender" => $gender,
    "alamat" => $alamat,
    "no_hp" => $no_hp,
    "email" => $email
];

$exec = $mhs->updateMahasiswa($data_update);

if($exec){
    echo "<script>alert('Data berhasil diupdate'); window.location = 'data.php'; </script>";
}else{
    echo "<script>alert('Data gagal diupdate'); window.location = 'data.php'; </script>";
}