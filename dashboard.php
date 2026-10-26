<?php
session_start();
// Cek apakah user sudah login atau belum
if (!isset($_SESSION['username'])) {
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard E-Commerce</title>
</head>
<body>

    <h2>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>
    <p><a href="logout.php">Logout</a></p>

    <hr>

    <h3>Daftar Produk E-Commerce</h3>
    
    <!-- Tabel Polos Tanpa Warna -->
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Kemeja Polos Pria</td>
            <td>Pakaian</td>
            <td>Rp 125.000</td>
            <td>50</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Celana Jeans Slimfit</td>
            <td>Pakaian</td>
            <td>Rp 200.000</td>
            <td>30</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Sepatu Sneakers Casual</td>
            <td>Sepatu</td>
            <td>Rp 350.000</td>
            <td>15</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Tas Ransel Laptop</td>
            <td>Aksesoris</td>
            <td>Rp 180.000</td>
            <td>25</td>
        </tr>
    </table>

</body>
</html>