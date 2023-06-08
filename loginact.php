<?php

include "class/login_class.php";
$login = new login();

$username = $_POST['username'];
$password = $_POST['password'];

$data_login = [
    "username" => $username,
    "password" => $password
];

$data = $login->login($data_login);

if(!empty($data)){
    //berikan akses login, dengan membuat session
    session_start();
    $_SESSION['username'] = $data['username'];

    echo "<script>alert('Login berhasil, selamat datang'); window.location = 'data.php';</script>";
}else{

    echo "<script>alert('Login gagal, Username dan password tidak ditemukan'); window.location = 'login.php';</script>";

}