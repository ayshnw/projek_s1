<?php
// Memulai session
session_start();

// Koneksi ke dalam database
include base_path('config/koneksi.php');

// Cek apakah pengguna sudah login
$userName = isset($_SESSION['username']) ? $_SESSION['username'] : "Guest";

// Inisialisasi pencarian
$search = "";

try {
    // Jika form search dikirimkan
    if (isset($_GET['search']) && !empty($_GET['search'])) {
        $search = $_GET['search'];

        // Query dengan filter nama produk
        $query = mysqli_prepare($koneksi, "SELECT * FROM produk WHERE nama_produk LIKE ?");
        if (!$query) {
            throw new Exception("Query gagal: " . mysqli_error($koneksi));
        }

        $searchTerm = '%' . $search . '%';
        mysqli_stmt_bind_param($query, "s", $searchTerm);
        mysqli_stmt_execute($query);
        $result = mysqli_stmt_get_result($query);
        $found = mysqli_num_rows($result);
    } else {
        // Query untuk mengambil semua produk
        $query = mysqli_query($koneksi, "SELECT * FROM produk");
        if (!$query) {
            throw new Exception("Query gagal: " . mysqli_error($koneksi));
        }
        $found = mysqli_num_rows($query);
    }
} catch (Exception $e) {
    echo "<h3>Terjadi kesalahan: " . htmlspecialchars($e->getMessage()) . "</h3>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AStore</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <header class="sticky">
        <div class="logo">
            <img src="ASTORE.PNG" alt="AStore Logo">
            <h1>AStore</h1>
        </div>
        <ul class="navmenu">
            <li><a href="menu_utama.php"><b>Menu Utama</b></a></li>
            <li><a href="tentang_kami.php">Tentang Kami</a></li>
        </ul>
        <div class="search-bar">
            <form method="GET">
                <input type="text" name="search" placeholder="SEARCH" value="<?= htmlspecialchars($search); ?>">
            </form>
        </div>
        <div class="nav-icon">
            <a href="keranjang.php"><i class='bx bx-cart'></i></a>
            <a href="profile.php"><i class='bx bx-user'></i> <?= htmlspecialchars($userName); ?></a>
        </div>
    </header>

    <section class="daftar-produk" id="produk">
        <div class="center-text">
            <h2>Daftar Produk</h2>
        </div>
        <div class="product-grid">
        <?php if ($found > 0) {
            while ($data = mysqli_fetch_assoc($query)) { ?>
                <div class="product-card">
                    <img src="uploads/<?= htmlspecialchars($data['gambar']); ?>" alt="<?= htmlspecialchars($data['nama_produk']); ?>">
                    <h4><?= htmlspecialchars($data['nama_produk']); ?></h4>
                    <p>Rp. <?= number_format($data['harga'], 0, ',', '.'); ?></p>
                    <a href="detail_produk.php?id=<?= $data['id']; ?>">
                        <button class="normal">Detail</button>
                    </a>
                </div>
            <?php } 
        } else { ?>
            <div class="center-text">
                <h3 style="color: red;">Produk tidak ditemukan!</h3>
            </div>
        <?php } ?>
        </div>
    </section>
</body>
</html>