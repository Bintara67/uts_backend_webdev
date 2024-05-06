<?php
require_once __DIR__ . '/../Model/Sales.php';

class SalesController {
    private $salesModel;

    public function __construct($pdo) {
        $this->salesModel = new Sales($pdo);
    }

    //metode untuk mendapatkan semua data penjualan
    public function getAllSales() {
        return $this->salesModel->getAllSales();
    }

    //metode untuk mendapatkan data penjualan berdasarkan ID
    public function getSalesById($orderId) {
        return $this->salesModel->getSalesById($orderId);
    }

    //metode untuk menambahkan data penjualan baru
    public function addSales($salesData) {
        return $this->salesModel->addSales($salesData);
    }

    //metode untuk memperbarui data penjualan berdasarkan ID
    public function updateSales($orderId, $salesData) {
        return $this->salesModel->updateSales($orderId, $salesData);
    }

    //metode untuk menghapus data penjualan berdasarkan ID
    public function deleteSales($orderId) {
        return $this->salesModel->deleteSales($orderId);
    }
}
