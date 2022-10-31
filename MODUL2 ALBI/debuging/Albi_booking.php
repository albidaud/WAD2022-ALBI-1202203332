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

    <!-- FORM -->
    <div class="container">
        <h3 class="text-center">Get your car, now!</h3>
        <form action="getOutput.php" method="GET">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="NAMA_NIM">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Book Date</label>
                <input type="text" class="form-control" id="date" name="date">
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Start Time</label>
                <input type="time" class="form-control" id="time" name="time">
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration (Days)</label>
                <input type="number" class="form-control" id="number" name="number">
            </div>
            <div class="mb-3">
                <label for="mobil" class="form-label">Car Type</label>
                <select name="mobil" id="" class="form-select">
        </form>
        <option selected disabled> Choose your Car</option>
        <option value="hyundai">Hyundai Creta</option>
        <option value="tesla">Tesla Cybertruck</option>
        <option value="toyota">Toyota Alphard</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="number" class="form-control" id="phone" name="phone">
    </div>

    <div class="mb-3">
        <label for="service" class="form-label">Add Service(s)</label>
        <br>
        <input type="checkbox" name="hp" id="service"><label for="healthprotocol">Health Protocol / Rp19.900</label>
        <br>
        <input type="checkbox" name="dr" id="service"><label for="dr">Driver / Rp100.000</label>
        <br>
        <input type="checkbox" name="ff" id="service"><label for="ff">Fuel filled / Rp250.000</label>
    </div>

    <div class="mb-3">
        <div class="d-grid gap-2">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </div>
    </div>

    <!-- FOOTER -->
    <div class="card text-center mt-auto">
        <div class="card-footer">
            Created by ALBI_1202203332
        </div>
    </div>