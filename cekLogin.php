<?php
if (isset($_POST['btnLogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "tanboy18@gmail.com") {
        if ($password == "kun") {
            //login berhasil
            header('location:index.php');
        } else {
            //password salah;
            header('location:Login.php?pesan=Password salah');
        }
    } else {
        //password salah;
        header('location:login.php?pesan=Username salah');
    }
}