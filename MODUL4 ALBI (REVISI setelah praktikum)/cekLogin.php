<?php
if (isset($_POST['btnLogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "tanboy18@gmail.com") {
        if ($password == "kun") {
            //login berhasil
            header('location:homepage.php');
        } else {
            //password salah;
            // header('location:Login.php?pesan=Password salah');
            echo "<script>alert('Gagal Login');</script>";
        }
    } else {
        //password salah;
        // header('location:login.php?pesan=Email salah');
        echo "<script>alert('Gagal Login');</script>";
    }
}