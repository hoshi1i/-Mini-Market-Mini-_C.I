<?php
$host = "localhost";
$user = "root"; // Sesuaikan dengan user MySQL Anda
$password = ""; // Sesuaikan dengan password MySQL Anda
$dbname = "project_c.i";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
