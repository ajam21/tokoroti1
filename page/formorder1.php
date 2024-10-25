<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
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
        .order-form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .order-form h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .order-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .order-form input[type="text"],
        .order-form input[type="number"] {
            width: calc(100% - 22px);
            padding: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .order-form input[type="radio"] {
            margin-right: 10px;
        }
        .order-form .radio-group div {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .order-form button {
            background-color: #ff6600;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        .order-form button:hover {
            background-color: #e65c00;
        }
    </style>
    <script>
        // Ambil nama produk dari URL
        function setProductName() {
            const urlParams = new URLSearchParams(window.location.search);
            const product = urlParams.get('product');
            if (product) {
                document.getElementById('product-name').innerText = product;
                document.getElementById('product').value = product; // Masukkan produk ke input tersembunyi
            }
        }
        // Panggil fungsi setelah halaman selesai dimuat
        window.onload = setProductName;
    </script>
</head>
<body>
    <div class="order-form">
        <h2>Order Form</h2>
        <!-- Tampilkan nama produk yang dipilih -->
        <p><strong>Pesanan:</strong> <span id="product-name">Roti</span></p>
        <form action="laporan.php" method="post">
            <input type="hidden" id="product" name="product"> <!-- Nama produk untuk dikirim -->
            
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name">
            
            <label for="quantity">Jumlah:</label>
            <input type="number" id="quantity" name="quantity">

            <div class="radio-group">
                <div>
                    <input type="radio" id="chocolate" name="flavor" value="coklat">
                    <label for="chocolate">Coklat</label>
                </div>
                <div>
                    <input type="radio" id="cheese" name="flavor" value="keju">
                    <label for="cheese">Keju</label>
                </div>
                <div>
                    <input type="radio" id="peanut" name="flavor" value="kacang">
                    <label for="peanut">Kacang</label>
                </div>
            </div>
            
            <button type="submit">Pesan Sekarang</button>
        </form>
    </div>
</body>
</html>
