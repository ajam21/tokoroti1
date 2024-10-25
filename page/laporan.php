<?php
// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $quantity = intval($_POST['quantity']);
    $flavor = htmlspecialchars($_POST['flavor']);
    $product = htmlspecialchars($_POST['product']); // Tambahan: jenis roti

    // Memvalidasi data
    if (empty($name) || empty($quantity) || empty($flavor) || empty($product)) {
        header("Location: error.php");
        exit();
    }

    // Format data
    $name = ucwords(strtolower($name));
    $flavor = ucwords(strtolower($flavor));
    $product = ucwords(strtolower($product)); // Format jenis roti

    // Membuat URL pesan WhatsApp
    $whatsappNumber = "6285156798249"; // Ganti dengan nomor WhatsApp tujuan
    $message = urlencode("Pesanan Baru:\n\nNama: $name\nJenis Roti: $product\nJumlah: $quantity\nRasa: $flavor");
    $whatsappURL = "https://wa.me/$whatsappNumber?text=$message";

    // Menampilkan ringkasan pesanan dan tombol WhatsApp
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Ringkasan Pesanan</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f5f5f5;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .summary {
                background-color: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 300px;
            }
            .summary h2 {
                text-align: center;
                font-size: 24px;
                margin-bottom: 20px;
            }
            .summary p {
                font-size: 18px;
                margin: 10px 0;
            }
            .whatsapp-button {
                background-color: #25D366;
                color: white;
                padding: 10px;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                text-align: center;
                display: block;
                width: 100%;
                margin-top: 20px;
                text-decoration: none;
            }
            .whatsapp-button:hover {
                background-color: #1ebe5b;
            }
        </style>
    </head>
    <body>
        <div class='summary'>
            <h2>Ringkasan Pesanan</h2>
            <p><strong>Nama:</strong> $name</p>
            <p><strong>Jenis Roti:</strong> $product</p> <!-- Tampilkan jenis roti -->
            <p><strong>Jumlah:</strong> $quantity</p>
            <p><strong>Rasa:</strong> $flavor</p>
            <p>Terima kasih telah memesan!</p>
            <a href='$whatsappURL' class='whatsapp-button' target='_blank'>Kirim Pesanan via WhatsApp</a>
        </div>
    </body>
    </html>";
} else {
    // Jika halaman diakses tanpa submit form
    echo "Akses tidak valid.";
}
?>
