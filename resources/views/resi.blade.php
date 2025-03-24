<!-- Nama File: resi.php -->
<!-- Deskripsi: file ini digunakan untuk memproses dan menampilkan data resi pengiriman dengan validasi login pengguna, pengambilan data dari database, dan menampilkan hasilnya dalam format HTML yang dinamis --> 
<!-- Dibuat oleh: Aulia Salsabilla - NIM: 3312401021 -->
<!-- Tanggal: 5-11-2024 --> 

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AStore - Resi</title>
  <link rel="stylesheet" href="resi.css">
  <style>
    .button-finish {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .button-finish:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="invoice">
    <div class="invoice-header">
      <img src="ASTORE.png" alt="Logo">
      <h2>AStore</h2>
    </div>
    <hr />
    <div class="invoice-body">
      <label for="id_resi">ID Resi:</label>

      <label for="name">Nama Pelanggan:</label>

      <label for="alamat">Alamat:</label>

      <label for="rincian_harga">Rincian Pembelian:</label>
      <table border="1" cellpadding="10" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Produk</th>
            <th>Ukuran</th>
            <th>Jumlah</th>
            <th>Harga per Unit</th>
            <th>Subtotal</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>

      <label for="total_harga">Total Harga:</label>]
    </div>
    <hr />
    <div class="footer">
      <p>Resi ini berfungsi sebagai bukti bahwa pembayaran Anda telah berhasil.</p>
      <p>Terima kasih telah berbelanja di AStore!</p>
    </div>
  </div>
</body>
</html>