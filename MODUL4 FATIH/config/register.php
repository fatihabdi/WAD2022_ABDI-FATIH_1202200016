<?php
require './koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$sandi = $_POST['password'];

$registerQuery = "INSERT INTO users (nama, email, password, no_hp) VALUES ('$nama', '$email', '$password', '$nohp')";

$executeQuery = mysqli_query($koneksi, $registerQuery);

if ($executeQuery) {
  header("location: ../pages/Login-Fatih.php");
} else {
  die(mysqli_error($koneksi));
}
