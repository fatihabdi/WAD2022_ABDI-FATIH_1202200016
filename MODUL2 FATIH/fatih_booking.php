    <!doctype html>
    <html lang="en">

    <?php
    require 'db.php';
    ?>


    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>EAD Rent | Fatih_1202200016</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-md-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="fatih_home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="fatih_booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="mt-2 mb-2 container">
            <h1 class="p-1" style="text-align: center;">Rent your car now!</h1>
        </div>

        <div class="container card shadow-sm">
            <div class="d-flex justify-content-around">
                <div class="col-6 ps-5 pe-5 d-flex align-items-center">
                    <?php
                    if (isset($_GET["img"])) {
                    ?><img class="" width="100%" src="<?= $_GET["img"]; ?>" alt="">
                    <?php
                    } else {
                    ?><img width="100%" src="img/rush.png" alt="">
                    <?php } ?>
                </div>
                <div class="col-6 ps-5 pe-5">
                    <ul type="none">
                        <form action="fatih_myBooking.php" method="post">
                            <li class="m-1">
                                <label for="nama">Name</label><br>
                                <input class="form-control" type="text" name="nama" id="nama" value="Fatih_1202200016" readonly>
                            </li>
                            <li class="m-1">
                                <label for="book">Book Date</label><br>
                                <input class="form-control" type="date" name="book" id="book">
                            </li>
                            <li class="m-1">
                                <label for="time">Start Time</label><br>
                                <input class="form-control" type="time" name="time" id="time">
                            </li>
                            <li class="m-1">
                                <label for="hari">Duration (Days)</label><br>
                                <input class="form-control" type="number" name="hari" id="hari" min="1">
                            </li>
                            <li class="m-1">
                                <label for="mobil">Car Type</label>
                                <select class="form-select" name="mobil" id="mobil">
                                    <option selected>Choose...</option>
                                    <?php foreach ($listmobil as $mbl) : ?>
                                        <?php
                                        if ($mbl["mobil"] == $_GET["mobil"]) {
                                        ?><option selected="selected" value="<?= $mbl["mobil"]; ?>"><?= $mbl["mobil"]; ?></option>
                                        <?php
                                        } else {
                                        ?><option value="<?= $mbl["mobil"]; ?>"><?= $mbl["mobil"]; ?></option>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                </select>
                            </li>
                            <li class="m-1">
                                <label for="phone">Phone Number</label><br>
                                <input class="form-control" type="number" name="phone" id="phone" min="0">
                            </li>
                            <li class="m-1">
                                <label for="service">Add Service(s)</label><br>
                                <input class="form-check-input m-1" type="checkbox" name="ser[]" value="Health protocol" id="health"><label class="form-check-label" for="health">Health protocol / Rp25.000</label><br>
                                <input class="form-check-input m-1" type="checkbox" name="ser[]" value="Driver" id="driver"><label class="form-check-label" for="driver">Driver / Rp100.000</label><br>
                                <input class="form-check-input m-1" type="checkbox" name="ser[]" value="Fuel Filled" id="fuel"><label class="form-check-label" for="fuel">Fuel Filled / Rp.250.000</label><br>
                            </li>
                            <li class="text-center pt-3">
                                <button class="btn btn-success justify-content-around" type="submit" style="width: 510px;">Book</button>
                            </li>
                        </form>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="fixed-bottom text-center pt-3 bg-light">
            <p style="text-align: center; color: lightslategray;">
                Created by Fatih_1202200016
            </p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    </html>