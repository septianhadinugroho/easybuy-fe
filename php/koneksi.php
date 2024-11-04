<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "easybuy";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi Gagal : " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
