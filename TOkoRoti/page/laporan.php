<?php
// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $quantity = intval($_POST['quantity']);
    $flavor = htmlspecialchars($_POST['flavor']);

    // Memvalidasi data
    if (empty($name) || empty($quantity) || empty($flavor)) {
        header ("Location: error.php");
        exit();
    }

    // Menampilkan ringkasan pesanan
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
        </style>
    </head>
    <body>
        <div class='summary'>
            <h2>Ringkasan Pesanan</h2>
            <p><strong>Nama:</strong> $name</p>
            <p><strong>Jumlah:</strong> $quantity</p>
            <p><strong>Rasa:</strong> $flavor</p>
            <p>Terima kasih telah memesan!</p>
        </div>
    </body>
    </html>";
} else {
    // Jika halaman diakses tanpa submit form
    echo "Akses tidak valid.";
}
?>
