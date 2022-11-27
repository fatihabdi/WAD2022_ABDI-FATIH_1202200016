  <?php
  $koneksi = new mysqli("localhost", "root", "", "modul4");

  if (!$koneksi) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
  }
