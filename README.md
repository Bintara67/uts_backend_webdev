# Dokumentasi Project UTS Back-End Web Development

    Nama  : Fajar Bintara Putra
    NIM   : 220040267
    Kelas : UG224
    Mata Kuliah : Back-End Web Development


### Project ini terdiri dari beberapa folder utama: config, public, src, dengan masing-masing memiliki sub-folder atau file, berikut penjelsannya:

## 1. config (Konfigurasi Sistem)
    => Koneksi Database (`config/database.php`)

      File ini berfungsi:
    
     - Menggunakan PDO untuk koneksi ke database MySQL.
     
     - Konfigurasi host, nama database, username, dan password disimpan dalam konstanta.
     
     - Jika koneksi gagal, ditampilkan pesan error dan program dihentikan.

       
## 2. public (File Utama PHP)
    =>  index.php

      File ini berfungsi sebagai halaman utama yang pertama kali diakses oleh pengguna saat membuka aplikasi. Digunakan untuk mengatur tampilan awal, seperti halaman beranda atau dashboard. Untuk saat ini berisi header yang bertuliskan “XYZ Sales API End Point”.

       
## 3. src
    3.1. Controller (Kelas-Kelas Utama)

    =>  CustomerController (`Controller/CustomerController.php`)

      File ini berfungsi:
    
     - Mengontrol data pelanggan.
     
     - Konstruktor menerima objek PDO untuk koneksi ke database.
     
     - Metode `getAllCustomers()`: Mengambil semua data pelanggan dari database.
     
     - Metode `getCustomerById($customerId)`: Mengambil data pelanggan berdasarkan ID.
     
     - Metode `addCustomer($customerData)`: Menambah data pelanggan baru.
     
     - Metode `updateCustomer($customerId, $customerData)`: Memperbarui data pelanggan berdasarkan ID.
     
     - Metode `deleteCustomer($customerId)`: Menghapus data pelanggan berdasarkan ID.

    =>  PurchaseController (`Controller/PurchaseController.php`)

      File ini berfungsi:
     
     - Mengontrol data pembelian.
     
     - Metode serupa dengan `CustomerController` untuk pengelolaan data pembelian.

    =>  SalesController (`Controller/SalesController.php`)

      File ini berfungsi:
    
     - Mengontrol data penjualan.
     
     - Metode serupa dengan `CustomerController` untuk pengelolaan data penjualan.

    3.2. Kelas Model

    =>  Customers (`Model/Customers.php`)

      File ini berfungsi:
      
     - Berinteraksi dengan tabel `customers` dalam database.
     
     - Metode `getAllCustomers()`: Mengambil semua data pelanggan dari tabel.

     - Metode `getCustomerById($customerId)`: Mengambil data pelanggan berdasarkan ID.
     
     - Metode `addCustomer($customerData)`: Menambah data pelanggan baru.
     
     - Metode `updateCustomer($customerId, $customerData)`: Memperbarui data pelanggan berdasarkan ID.
     
     - Metode `deleteCustomer($customerId)`: Menghapus data pelanggan berdasarkan ID.


    =>  Purchases (`Model/Purchases.php`)

      File ini berfungsi:
    
     - Berinteraksi dengan tabel `purchases` dalam database.
     
     - Metode serupa dengan `Customers` untuk pengelolaan data pembelian.

    =>  Sales (`Model/Sales.php`)

      File ini berfungsi:
    
     - Berinteraksi dengan tabel `sales` dalam database.
    
     - Metode serupa dengan `Customers` untuk pengelolaan data penjualan.


## Refleksi

### Tantangan
   - Memastikan fungsionalitas setiap kelas dan metode sesuai dengan kebutuhan.
   
   - Memahami dan menerapkan konsep MVC dengan benar.
   
   - Mengelola keamanan dan validasi data input.
   
#### Solusi
   - Melakukan pengujian menyeluruh terhadap setiap kelas dan metode.
   
   - Memanfaatkan konsep OOP untuk memisahkan tugas dan tanggung jawab.
   
   - Implementasi PDO untuk keamanan operasi database.
   
   - Melakukan validasi data input secara ketat untuk menjaga keamanan dan integritas data.

Semoga project Back-End yang saya kerjakan dapat menjadi fondasi yang kokoh untuk koneksi database dan pengelolaan data pelanggan, pembelian, dan penjualan dengan efisiensi tinggi. Semangat terus dalam menghadapi tantangan dan mengatasi kesulitan, karena setiap langkah adalah pelajaran berharga untuk kemajuan selanjutnya dalam pengembangan aplikasi web. Teruslah berinovasi dan berkontribusi positif dalam dunia teknologi!
