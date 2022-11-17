<?php
require './config/koneksi.php';

$query = "SELECT * FROM showroom_EAD";
$result = mysqli_query($koneksi, $query);

function onClick($result)
{
  if (mysqli_num_rows($result) > 0) {
    header("Location: ./pages/List-Fatih.php");
  } else {
    header("Location: ./pages/Add-Fatih.php");
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | Fatih_1202200016</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include 'asset/style/style.css'; ?>
  </style>
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" style="color: white;" href="#home">Home</a>
          <a class="nav-link" href="<?php if (mysqli_num_rows($result) > 0) {
                                      echo "./pages/List-Fatih.php";
                                    } else {
                                      echo "./pages/Add-Fatih.php";
                                    } ?>">MyCar</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Nav End -->

  <!-- Jumbotron -->
  <section id="home">
    <div class="container">
      <div class="d-flex gap-5 bungkus justify-content-center align-items-center">
        <div>
          <h1>Selamat Datang Di<br /> Show Room Fatih</h1>
          <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /> Quo laboriosam labore, facere libero officia iure hic error cum?</p>
          <a href="<?php if (mysqli_num_rows($result) > 0) {
                      echo "./pages/List-Fatih.php";
                    } else {
                      echo "./pages/Add-Fatih.php";
                    } ?>" class="button btn-primary">MyCar</a>
          <div class="d-flex align-items-center gap-5 mt-5">
            <img src="<?php echo "asset/images/logo-ead.png" ?>" alt="logoead" style="width:100px;">
            <p style="margin-top: 20px; font-size:14px;">Fatih_1202200016</p>
          </div>
        </div>
        <img src="<?php echo "asset/images/jumbotron.png" ?>" alt="jumbotron">
      </div>
    </div>
  </section>
  <!-- Jumbotron End -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>