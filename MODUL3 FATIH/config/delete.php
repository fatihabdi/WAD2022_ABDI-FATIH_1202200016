<?php
require './koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM showroom_EAD WHERE id_mobil = $id";

if (mysqli_query($koneksi, $sql)) {
  header("location: ../pages/List-Fatih.php");
} else {
  echo "Gagal";
}
