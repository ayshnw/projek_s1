<!--
// Nama File: resetsandi.php
// Deskripsi: mengelola fungsi yang berhubungan dengan forgot password pada halaman login
// Dibuat oleh: Fahmi Ahmad Fardani - NIM: 3312401017
// Tanggal: 01 Desember 2024

DECLARE db_connention AS DatabaseConnection
DECLARE email AS STRING

db_connection = OPEN CONNECTION TO 'astore'

INPUT email

IF db_connection IS NOT NULL THEN
  DECLARE email AS STRING

  EXECUTE QUERY 'SELECT email FROM users WHERE username = :username' INTO email
	
	DISPLAY "Email berhasil"

  ELSE	DISPLAY "Email tidak ditemukan"
  ENDIF

CLOSE db_connection
-->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login website AStore</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="stylesheet" href="lupa_sandi.css">
</head>
<body>
<div class="wrapper">
        <span class="bg-animate"></span>
        <h2>Lupa Kata Sandi</h2>
        <div class="form-box login">
        <form method="POST" action="">
            <div class="input-box">
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required>
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
