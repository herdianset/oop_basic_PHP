<?php
include "database_class.php";
class mahasiswa extends database
{

    function __construct()
    {
        parent::__construct();
    }

    function getMahasiswa()
    {
        $qry = mysqli_query($this->con, "select * from mahasiswa");
        while($datas = mysqli_fetch_assoc($qry)){
            $data[] = $datas;
        }
        return $data;
    }

    function insertMahasiswa($data)
    {
        $qry = mysqli_query($this->con, "INSERT INTO mahasiswa VALUES (
            '". $data['nim']."',
            '". $data['nama_mhs']."',
            '". $data['kode_jurusan']."',
            '". $data['gender']."',
            '". $data['alamat']."',
            '". $data['no_hp']."',
            '". $data['email']."'
        )");

        return $qry;
    }

    function getUpdateMahasiswa($nim)
    {
        $qry = mysqli_query($this->con, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
        $data = mysqli_fetch_assoc($qry);

        return $data;
    }

    function updateMahasiswa($data)
    {
        $qry = mysqli_query($this->con, "UPDATE mahasiswa SET nama_mhs = '". $data['nama_mhs']."',
           kode_jurusan = '". $data['kode_jurusan']."',
           gender = '". $data['gender']."',
           alamat = '". $data['alamat']."',
           no_hp = '". $data['no_hp']."',
           email = '". $data['email']."'
           WHERE nim = '". $data['nim']."'
        ");

        return $qry;
    }

    function deleteMahasiswa($nim)
    {
        $qry = mysqli_query($this->con,"DELETE FROM mahasiswa WHERE nim = '$nim'");
        return $qry;
    }
}

