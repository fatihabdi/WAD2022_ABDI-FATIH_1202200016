  <?php
  require './koneksi.php';

  $email = $_POST['email'];
  $sandi = $_POST['password'];
  $check = $_POST['remember'];

  $cariQuery = "SELECT * FROM users WHERE email = '$email'";

  $executeCari = mysqli_query($koneksi, $cariQuery);


  $row = mysqli_fetch_assoc($executeCari);
  $data = mysqli_fetch_array($executeCari);

  if ($executeCari == true) {
    if ($check == 'checked') {
      setcookie('email', $email);
      setcookie('pass', $sandi);
    }

    session_start();
    $_SESSION['id'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    header("location: ../pages/HomeAfter-Fatih.php");
  } else {
    header("location: ../pages/Login-Fatih.php?pesan=failed");
  }
