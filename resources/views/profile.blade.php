<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - AStore</title>
    <link rel="stylesheet" href="profile.css">
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
                <li><b><a href="#">Profil</a></b></li>
                <li><a href="#">Ubah Password</a></li>
                <li><a href="#">Pengaturan Privasi</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
        <div class="profile-content">
            <h2>Profil</h2>
            <p>Informasi profil pengguna</p>
            <div class="form-container">
                <form>
                    <label>Username</label>
                    <input type="text" value="Fahmi_Fardani" readonly>

                    <label>Nama</label>
                    <input type="text" value="Fahmi Ahmad Fardani" readonly>

                    <label>Email</label>
                    <input type="email" value="Fahmi@example.com" readonly>

                    <label>Alamat</label>
                    <input type="text" value="Jl. Merdeka No. 10" readonly>

                    <label>Nomor Handphone</label>
                    <input type="tel" value="081234567890" readonly>

                    <label>Jenis Kelamin</label>
                    <input type="text" value="Laki" readonly>

                    <label>Tanggal Lahir</label>
                    <input type="text" value="01 Januari 2000" readonly>
                </form>
            </div>
        </div>
    </div>
</body>
</html>