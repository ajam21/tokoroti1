<?php
// report.php
session_start();

// Cek apakah user sudah login sebagai owner
if (!isset($_SESSION['is_owner']) || $_SESSION['is_owner'] !== true) {
    die("Akses ditolak. Hanya owner yang bisa melihat laporan.");
}

// Koneksi ke database
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username MySQL Anda
$password = ""; // Sesuaikan dengan password MySQL Anda
$dbname = "toko_roti_mama_azzam";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil semua data pesanan
$sql = "SELECT id, order_date, jumlah, rasa, status FROM orders ORDER BY order_date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Laporan Pesanan</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Tanggal Pesanan</th><th>Jumlah</th><th>Rasa</th><th>Status</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['order_date']}</td><td>{$row['jumlah']}</td><td>{$row['rasa']}</td><td>{$row['status']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "Belum ada pesanan.";
}

$conn->close();
?>
