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
                                <form action="">
                                    <label for="inputEmail" class="mx-3">Email</label>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="email" placeholder="" required="" autofocus=""
                                            class="form-control rounded border-0 shadow-sm px-4">
                                    </div>

                                    <label for="inputNama" class="mx-3">Nama</label>
                                    <div class="form-group mb-3">
                                        <input id="inputNama" type="text" placeholder="" required=""
                                            class="form-control rounded border-0 shadow-sm px-4">
                                    </div>

                                    <label for="inputNoHP" class="mx-3">Nomor Handphone</label>
                                    <div class="form-group mb-3">
                                        <input id="inputNoHP" type="number" placeholder="" required=""
                                            class="form-control rounded border-0 shadow-sm px-4">
                                    </div>

                                    <label for="inputKataSandi" class="mx-3">Kata Sandi</label>
                                    <div class="form-group mb-3">
                                        <input id="inputKataSandi" type="password" placeholder="" required=""
                                            class="form-control rounded border-0 shadow-sm px-4">
                                    </div>

                                    <label for="inputEmail" class="mx-3">Konfirmasi Kata Sandi</label>
                                    <div class="form-group mb-3">
                                        <input id="inputKonfirmasiKataSandi" type="password" placeholder="" required=""
                                            class="form-control rounded border-0 shadow-sm px-4">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block mb-2 rounded shadow-sm"
                                        name="btnRegister">Daftar</button>
                                    <div>
                                        Anda sudah punya akun? Klik <a href="Login.php">Login</a>
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
