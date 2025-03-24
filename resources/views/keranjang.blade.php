<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AStore - Keranjang</title>
    <link rel="stylesheet" href="keranjang.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@100..900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <header class="sticky">
        <div class="logo">
            <img src="ASTORE.PNG" alt="AStore Logo">
            <h1>AStore</h1>
        </div>
        <ul class="navmenu">
            <li><a href="menu_utama.html">Menu Utama</a></li>
            <li><a href="tentang_kami.html">Tentang Kami</a></li>
        </ul>
        <div class="search-bar">
            <input type="text" placeholder="SEARCH">
        </div>
        <div class="nav-icon">
            <a href="keranjang.html"><i class='bx bx-cart'></i></a>
            <a href="profile.html"><i class='bx bx-user'></i></a>
        </div>
    </header>

    <div class="shopping-cart">
        <h1>Keranjang Anda</h1>
        <label>
            <input type="checkbox" id="select_all" onchange="selectAllItems(this)">
            Pilih Semua
        </label>
        
        <div class="cart-item">
            <img src="uploads/produk1.jpg" alt="Produk 1">
            <div class="item-details">
                <h2>Seragam SD Merah Putih</h2>
                <p>Harga per unit: Rp 100.000</p>
                <p>Ukuran: M</p>
                <p>Stok Tersedia: 10</p>
                <label for="jumlah_1">Jumlah:</label>
                <input type="number" id="jumlah_1" value="1" min="1" max="10" onchange="updateHarga(1, 100000)">
            </div>
            <div class="price" id="total_harga_1" data-harga-per-unit="100000">Rp 100.000</div>
            <input type="checkbox" class="select-item" value="1" onchange="updateSubtotal()">
            <button class="delete-button">Hapus</button>
        </div>

        <div class="summary">
            <p class="subtotal">Total: <span class="price" id="total_semua">Rp 100.000</span></p>
            <button class="proceed-to-buy">Bayar</button>
        </div>
    </div>

    <script>
        function updateHarga(itemId, hargaPerUnit) {
            const jumlahInput = document.getElementById('jumlah_' + itemId);
            const totalHarga = document.getElementById('total_harga_' + itemId);
            const totalSemua = document.getElementById('total_semua');
            
            const jumlah = parseInt(jumlahInput.value) || 0;
            const totalItem = jumlah * hargaPerUnit;
            totalHarga.innerText = 'Rp ' + totalItem.toLocaleString('id-ID');
            
            updateSubtotal();
        }

        function updateSubtotal() {
            let totalKeseluruhan = 0;
            document.querySelectorAll('.select-item:checked').forEach(function(checkbox) {
                const itemId = checkbox.value;
                const hargaPerUnit = parseInt(document.getElementById('total_harga_' + itemId).dataset.hargaPerUnit);
                const jumlah = parseInt(document.getElementById('jumlah_' + itemId).value);
                totalKeseluruhan += hargaPerUnit * jumlah;
            });
            document.getElementById('total_semua').innerText = 'Rp ' + totalKeseluruhan.toLocaleString('id-ID');
        }

        function selectAllItems(selectAllCheckbox) {
            document.querySelectorAll('.select-item').forEach(function(checkbox) {
                checkbox.checked = selectAllCheckbox.checked;
            });
            updateSubtotal();
        }
    </script>
</body>
</html>