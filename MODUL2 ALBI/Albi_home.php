<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODUL2 ALBI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="MODUL2 ALBI.css">
</head>

<!-- NAVBAR -->

<body>
    <ul class="nav justify-content-center bg-dark fixed-top py-3">
        <li class="nav-item">
            <a class="nav-link active text-white" href="Albi_home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="Albi_booking.php">Booking</a>
        </li>
    </ul>

    <br>
    <br>
    <br>

    <!-- HEADING -->
    <div class="container text-center">
        <h2>WELCOME TO EAD RENT</h2>
    </div>

    <div class="container text-center text-muted">
        <h6>Find your best deal, here!</h6>
    </div>

    <?php
    if (isset($_GET["url"])) {
        $url = $_GET["url"];
        switch ($url) {
            case "Home":
                include "Albi_home.php";
                break;
            case "Booking":
                include "Albi_booking.php";
                break;
            case "My Booking":
                include "Albi_mybooking.php";
                break;
        }
    }
    ?>

    <br>

    <!-- CARDS -->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="Hyundai Creta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hyundai Creta</h5>
                        <p class="card-text">Rp.900.000 / day</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center">5 Kursi</li>
                        <li class="list-group-item text-center">1500 CC</li>
                        <li class="list-group-item text-center">Matic</li>
                    </ul>
                    <div class="button-rush text-center" style="height: 60px">
                        <input class="btn btn-primary mt-3" type="submit" value="Book Now">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Tesla Cybertruck.jpg" class="card-img-top" alt="Jinx">
                    <div class="card-body">
                        <h5 class="card-title mt-5">Tesla Cybertruck</h5>
                        <p class="card-text text-muted">Rp.2.000.000 / day
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center">6 Kursi</li>
                        <li class="list-group-item text-center">2500 CC</li>
                        <li class="list-group-item text-center">Manual</li>
                    </ul>
                    <div class="button-rush text-center" style="height: 60px">
                        <input class="btn btn-primary mt-3" type="submit" value="Book Now">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Toyota Alphard.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Alphard</h5>
                        <p class="card-text">Rp.1.200.000 / day</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center">8 Kursi</li>
                        <li class="list-group-item text-center">1500 CC</li>
                        <li class="list-group-item text-center">Manual</li>
                    </ul>
                    <div class="button-rush text-center" style="height: 60px">
                        <input class="btn btn-primary mt-3" type="submit" value="Book Now">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <!-- FOOTER -->
    <div class="card text-center mt-auto">
        <div class="card-footer">
            Created by ALBI_1202203332
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>