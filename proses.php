<?php

$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$kode_jurusan = $_POST['jurusan'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

include "class/mahasiswa_class.php";
$mhs = new mahasiswa();

$data_insert = [
    "nim" => $nim,
    "nama_mhs" => $nama_mhs,
    "kode_jurusan" => $kode_jurusan,
    "gender" => $gender,
    "alamat" => $alamat,
    "no_hp" => $no_hp,
    "email" => $email
];

$exec = $mhs->insertMahasiswa($data_insert);

if($exec){
    echo "<script>alert('Data berhasil disimpan'); window.location = 'data.php'; </script>";
}else{
    echo "<script>alert('Data gagal disimpan'); window.location = 'data.php'; </script>";
}