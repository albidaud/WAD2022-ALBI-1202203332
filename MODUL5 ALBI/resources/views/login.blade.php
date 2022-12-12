<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="MODUL4 ALBI.css">
</head>

<body>
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

                                <?php
                            if (isset($_GET['pesan'])) {
                            ?>

                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Login tidak berhasil</strong>
                                    <?php echo $_GET['pesan']; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <?php } ?>

                                <h3 class="display-4 font-weight-bold">Login</h3>
                                <form action="cekLogin.php" method="POST">
                                    <label for="inputEmail" class="mx-3">Email</label>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="email" name="email" placeholder="Masukkan alamat email"
                                            required="" autofocus=""
                                            class="form-control rounded border-0 shadow-sm px-4">
                                    </div>

                                    <label for="inputPassword" class="mx-3">Password</label>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword" type="password" name="password" placeholder="Masukkan password"
                                            required="" class="form-control rounded border-0 shadow-sm px-4">
                                    </div>

                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox">
                                        <label for="customCheck1" class="custom-control-label">Remember me</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mb-2 rounded shadow-sm"
                                        name="btnLogin">Login</button>
                                    <div>
                                        <!-- Belum memiliki akun? Klik <a href="Register.php">Daftar</a> -->
                                        Belum memiliki akun? Klik <a href="/register">Daftar</a>
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