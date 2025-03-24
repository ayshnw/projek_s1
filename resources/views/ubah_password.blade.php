<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Password - AStore</title>
    <link rel="stylesheet" href="ubah_password.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100..900&family=Parkinsans:wght@500&display=swap" rel="stylesheet">
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
            <li><a href="menu_utama.php">Menu Utama</a></li>
            <li><a href="tentang_kami.php">Tentang Kami</a></li>
        </ul>
        <div class="search-bar">
            <input type="text" placeholder="SEARCH">
        </div>
        <div class="nav-icon">
            <a href="keranjang.php"><i class='bx bx-cart'></i></a>
            <a href="profile.php"><i class='bx bx-user'></i></a>
        </div>
    </header>

    <div class="profile-container">
        <div class="sidebar">
            <h3>Akun Saya</h3>
            <ul>
                <li><a href="profile.php">Profil</a></li>
                <li><b><a href="ubah_password.php">Ubah Password</a></b></li>
                <li><a href="privasi.php">Pengaturan Privasi</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="profile-content">
            <h2>Ubah Password</h2>
            <p>Untuk keamanan akun Anda, mohon untuk tidak menyebarkan password Anda ke orang lain</p>
            <div class="form-container">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="old-password">Password lama</label>
                        <input type="password" id="old-password" name="old_password" placeholder="Masukkan password lama" required>
                    </div>
                    <div class="form-group">
                        <label for="new-password">Password Baru</label>
                        <input type="password" id="new-password" name="new_password" placeholder="Masukkan password baru" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Konfirmasi Password</label>
                        <input type="password" id="confirm-password" name="confirm_password" placeholder="Konfirmasi password" required>
                    </div>
                    <button type="submit" name="ubah_password" class="btn">Konfirmasi</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
