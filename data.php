<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>

<body>
    <?php
    session_start();
    $username = $_SESSION['username'];
    if (empty($username)) {
        echo "<script>alert('Akses ditolak, Silahkan login terlebih dahulu'); window.location = 'login.php';</script>";
    }
    ?>
    <h1>Selamat datang <?= $username ?> <a href="logout.php">Log out</a></h1>
    <h2>Input data Mahasiswa</h2>

    <form action="proses.php" method="POST">
        <label for="nim">NIM :</label><br>
        <input type="number" name="nim"><br>
        <label for="nama">Nama MHS :</label><br>
        <input type="text" name="nama_mhs"><br>
        <label for="jurusan">Jurusan</label><br>
        <select name="jurusan">
            <option value="J01">Sistem Komputer</option>
            <option value="J02">Sistem Informasi</option>
            <option value="J03">Teknologi Informasi</option>
        </select><br>
        <label for="gender">Gender :</label><br>
        <input type="radio" name="gender" value="0"> Perempuan
        <input type="radio" name="gender" value="1"> Laki - Laki <br>
        <label for="alamat">Alamat :</label><br>
        <input type="text" name="alamat"><br>
        <label for="no_hp">No. HP</label><br>
        <input type="number" name="no_hp"><br>
        <label for="email">Email : </label><br>
        <input type="email" name="email"><br><br>
        <input type="submit" value="Simpan">
    </form>
    <hr>

    <h2>Data Mahasiswa</h2>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama Mhs</th>
            <th>Jurusan</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
        //menambahkan file class mahasiswa
        include "class/mahasiswa_class.php";
        //membuat object class mahasiswa
        $mhs = new mahasiswa();
        $data = $mhs->getMahasiswa();
        //tampilkan data mahasiswa dngn perulangan
        foreach ($data as $mhs) {
        ?>
            <tr>
                <td><?= $mhs['nim'] ?></td>
                <td><?= $mhs['nama_mhs'] ?></td>
                <td><?= $mhs['kode_jurusan'] ?></td>
                <td><?= $mhs['gender'] == 0 ? 'Perempuan' : 'Laki-Laki' ?></td>
                <td><?= $mhs['alamat'] ?></td>
                <td><?= $mhs['no_hp'] ?></td>
                <td><?= $mhs['email'] ?></td>
                <td>
                    <a href="edit.php?nim=<?= $mhs['nim'] ?>"><button>Edit</button></a>
                    <a href="delete.php?nim=<?= $mhs['nim'] ?>"><button>Delete</button></a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>