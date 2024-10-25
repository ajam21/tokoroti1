<?php
// process_order.php

// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti sesuai dengan username MySQL Anda
$password = ""; // Ganti sesuai dengan password MySQL Anda
$dbname = "toko_roti_mama_azzam";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$jumlah = $_POST['jumlah'];
$rasa = $_POST['rasa'];

// Insert data ke dalam tabel
$sql = "INSERT INTO orders (jumlah, rasa) VALUES ('$jumlah', '$rasa')";

if ($conn->query($sql) === TRUE) {
    echo "Pesanan berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
