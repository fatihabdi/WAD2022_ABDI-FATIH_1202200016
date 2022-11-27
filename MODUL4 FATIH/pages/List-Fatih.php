<?php
require '../config/koneksi.php';

$query = "SELECT * FROM showroom_EAD";
$result = mysqli_query($koneksi, $query);
$result2 = mysqli_query($koneksi, "SELECT * FROM users");
$data = mysqli_fetch_array($result2);

// messages chatcer
if (isset($_GET['pesan'])) {
  if ($_GET['pesan'] == "berhasil") {
    echo "<div class='alert alert-success' id='alert' role='alert'>
    Data Berhasil ditambahkan.
  </div>";
  } else if ($_GET['pesan'] == "gagal") {
    echo "<div class='alert alert-danger' id='alert' role='alert'>
    Error
  </div>";
  } else if ($_GET['pesan'] == "hapus") {
    echo "<div class='alert alert-success' id='alert' role='alert'>
    Data Berhasil dihapus.
  </div>";
  } else if ($_GET['pesan'] == "edit") {
    echo "<div class='alert alert-success' id='alert' role='alert'>
    Data Berhasil diupdate.
  </div>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Car | Fatih_1202200016</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/style.css'; ?>
  </style>
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" style="color: white;" href="./HomeAfter-Fatih.php">Home</a>
          <a class="nav-link" href="<?php (mysqli_num_rows($result) > 0) ? print "../pages/List-Fatih.php" : print "../pages/Add-Fatih.php" ?>">MyCar</a>
        </div>
        <div class="d-flex gap-4">
          <a href="Add-Fatih.php" style="background-color: white; color:blue; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;">Add Car</a>
          <div class="dropdown">
            <button class="btn dropdown-toggle" style="background-color:  white; color:blue; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $data['nama']; ?>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" style="border-radius: 5px; color:black; text-decoration: none;" href="./Profile-Fatih.php">Profile</a></li>
              <li><a class="dropdown-item" style="border-radius: 5px; color:black; text-decoration: none;" href="../config/logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Nav End -->

  <!-- Content -->
  <section id="list">
    <div class="container">
      <div>
        <h1>My Show Room</h1>
        <p>List Show Room Fatih - 1202200016</p>
        <div class="d-flex gap-5">
          <?php
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='card cardcontent' style='width: 18rem;'>
            <img src='../asset/images/" . $row["foto_mobil"] . "' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
            <div class='card-body'>
              <h5 class='card-title'>" . $row["nama_mobil"] . "</h5>
              <p class='card-text'>" . substr($row["deskripsi"], 0, 50) . '...' . "</p>
              <span class='d-flex'>
                <a href='Detail-Fatih.php?id=" . $row["id_mobil"] . "' class='btn btn-primary' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                <a href='../config/delete.php?id=" . $row["id_mobil"] . "' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px; margin-left:20px;'>Delete</a>
              </span>
            </div>
          </div>";
            }
          } else {
            echo "0 results";
          }
          ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Content End -->

  <!-- footer -->
  <footer class="fixed-bottom" style="padding-bottom: 50px;">
    <div class="container">
      <p style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #757575;">Jumlah Mobil : <?php echo mysqli_num_rows($result) ?></p>
    </div>
  </footer>
  <!-- footer end -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script>
    // Hide Alert after 3 seconds function
    const timeout = document.getElementById('alert');
    setTimeout(hideElement, 3000)

    function hideElement() {
      timeout.style.display = 'none'
    }
  </script>
</body>

</html>