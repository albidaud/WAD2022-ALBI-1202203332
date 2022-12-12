<?php
// require 'config.php';
// if(isset($_POST["btnRegister"])){
//     $email = $_POST["email"];
//     $nama = $_POST["nama"];
//     $nohp = $_POST["nohp"];
//     $katasandi = $_POST["katasandi"];
//     $confirm = $_POST["confirm"];
//     $duplicate = mysqli_query($conn, "SELECT * FROM user_albi WHERE email = '$email' OR nama = '$nama'");
//     if(mysqli_num_rows($duplicate) > 0) {
//         echo
//         "<script> alert('Email atau Username sudah pernah digunakan'); </script>";
//     }
//     else{
//         if($katasandi == $confirm){
//             $query = "INSERT INTO user_albi VALUES('','$email', '$nama', '$nohp', '$katasandi')";
//             mysqli_query($conn,$query);
//             echo
//             "<script> alert('Registrasi berhasil'); </script>";
//         }
//         else{
//             echo
//             "<script> alert ('Password yang anda masukkan salah'); </script>";
//         }
//     }
// }
?>

<!doctype html>
<html lang="en">

<body>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MODUL4 ALBI</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="MODUL4 ALBI.css">
    </head>

    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex">
                <img src="lexus-car.jpg" class="img-fluid" alt="">
            </div>


            <!-- The content half -->
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">

                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4 font-weight-bold">Register</h3>
                                <form action=>
                                    <label for="inputEmail" class="mx-3">Email</label>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="email" name="email" placeholder="" required="" autofocus=""
                                            class="form-control rounded border-0 shadow-sm px-4">
                                    </div>

                                    <label for="inputNama" class="mx-3">Nama</label>
                                    <div class="form-group mb-3">
                                        <input id="inputNama" type="text" name="nama" placeholder="" required=""
                                            class="form-control rounded border-0 shadow-sm px-4">
                                    </div>

                                    <label for="inputNoHP" class="mx-3">Nomor Handphone</label>
                                    <div class="form-group mb-3">
                                        <input id="inputNoHP" type="number" name="nohp" placeholder="" required=""
                                            class="form-control rounded border-0 shadow-sm px-4">
                                    </div>

                                    <label for="inputKataSandi" class="mx-3">Kata Sandi</label>
                                    <div class="form-group mb-3">
                                        <input id="inputKataSandi" type="password" name="katasandi" placeholder="" required=""
                                            class="form-control rounded border-0 shadow-sm px-4">
                                    </div>

                                    <label for="inputEmail" class="mx-3">Konfirmasi Kata Sandi</label>
                                    <div class="form-group mb-3">
                                        <input id="inputKonfirmasiKataSandi" type="password" name="confirm" placeholder="" required=""
                                            class="form-control rounded border-0 shadow-sm px-4">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block mb-2 rounded shadow-sm"
                                        name="btnRegister">Daftar</button>
                                    <div>
                                        <!-- Anda sudah punya akun? Klik <a href="Login.php">Login</a> -->
                                        Anda sudah punya akun? Klik <a href="/login">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

        </div>
    </div>
</body>

</html>
