<?php
$nim = $_GET['nim'];
include "class/mahasiswa_class.php";
$mhs = new mahasiswa();
$data = $mhs->getUpdateMahasiswa($nim);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <h2>Edit data Mahasiswa</h2>
    <form action="proses_update.php" method="POST">
        <label for="nim">NIM :</label><br>
        <input type="number" name="nim" value="<?= $data['nim'] ?>" readonly><br>
        <label for="nama">Nama MHS :</label><br>
        <input type="text" name="nama_mhs" value="<?= $data['nama_mhs'] ?>"><br>
        <label for="jurusan">Jurusan</label><br>
        <select name="jurusan">
            <option value="J01">Sistem Komputer</option>
            <option value="J02">Sistem Informasi</option>
            <option value="J03">Teknologi Informasi</option>
        </select><br>
        <label for="gender">Gender :</label><br>
        <?php if($data['gender'] == 1) { ?>
            <input type="radio" name="gender" value="0"> Perempuan
            <input type="radio" name="gender" value="1" checked> Laki - Laki <br>
        <?php }else{ ?>
            <input type="radio" name="gender" value="0" checked> Perempuan
            <input type="radio" name="gender" value="1"> Laki - Laki <br>
        <?php } ?>
        <label for="alamat">Alamat :</label><br>
        <input type="text" name="alamat" value="<?= $data['alamat'] ?>"><br>
        <label for="no_hp">No. HP</label><br>
        <input type="number" name="no_hp" value="<?= $data['no_hp'] ?>"><br>
        <label for="email">Email : </label><br>
        <input type="email" name="email" value="<?= $data['email'] ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>