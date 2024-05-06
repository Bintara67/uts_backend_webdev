<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Back-End Web Development</title>
</head>
<body>
    <h1>XYZ Sales API End Point</h1>
</body>
</html>

File `index.php` bisa dibuat untuk menghubungkan controller yang telah dibuat sebelumnya dengan tampilan web atau antarmuka pengguna. Di bawah ini adalah contoh implementasi sederhana dari `index.php`:

<?php
// Memanggil file konfigurasi database
require_once __DIR__ . '/config/database.php';

// Memanggil file controller yang dibutuhkan
require_once __DIR__ . '/Controller/CustomerController.php';
require_once __DIR__ . '/Controller/PurchaseController.php';
require_once __DIR__ . '/Controller/SalesController.php';

// Membuat objek PDO untuk koneksi ke database
$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Membuat objek controller untuk setiap entitas
$customerController = new CustomerController($pdo);
$purchaseController = new PurchaseController($pdo);
$salesController = new SalesController($pdo);

// Menangani permintaan HTTP dari pengguna
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Contoh pemanggilan metode dari controller
    $allCustomers = $customerController->getAllCustomers();
    $allPurchases = $purchaseController->getAllPurchases();
    $allSales = $salesController->getAllSales();

    // Lakukan tindakan berikutnya sesuai dengan kebutuhan aplikasi Anda
    // Misalnya, tampilkan data ke halaman web menggunakan HTML atau format lainnya
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Misalnya, tangani permintaan POST untuk menambah data pelanggan, pembelian, atau penjualan
} elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // Misalnya, tangani permintaan PUT untuk memperbarui data pelanggan, pembelian, atau penjualan
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Misalnya, tangani permintaan DELETE untuk menghapus data pelanggan, pembelian, atau penjualan
} else {
    // Tangani metode HTTP lainnya jika diperlukan
}
?>
```

Pastikan untuk menyesuaikan pemanggilan file controller dan logika aplikasi dengan kebutuhan spesifik Anda. File `index.php` ini bisa dijadikan sebagai titik masuk untuk mengelola operasi CRUD (Create, Read, Update, Delete) terhadap data pelanggan, pembelian, dan penjualan dalam aplikasi web Anda.
