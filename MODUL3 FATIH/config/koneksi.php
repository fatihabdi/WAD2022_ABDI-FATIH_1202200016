  <?php
  $koneksi = new mysqli();

  if (!$koneksi) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
  }
