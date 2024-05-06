<?php
require_once __DIR__ . '/../Model/Purchases.php';

class PurchaseController {
    private $purchaseModel;

    public function __construct($pdo) {
        $this->purchaseModel = new Purchases($pdo);
    }

    //metode untuk mendapatkan semua data pembelian
    public function getAllPurchases() {
        return $this->purchaseModel->getAllPurchases();
    }

    //metode untuk mendapatkan data pembelian berdasarkan ID
    public function getPurchaseById($purchaseId) {
        return $this->purchaseModel->getPurchaseById($purchaseId);
    }

    //metode untuk menambahkan data pembelian baru
    public function addPurchase($purchaseData) {
        return $this->purchaseModel->addPurchase($purchaseData);
    }

    //metode untuk memperbarui data pembelian berdasarkan ID
    public function updatePurchase($purchaseId, $purchaseData) {
        return $this->purchaseModel->updatePurchase($purchaseId, $purchaseData);
    }

    //metode untuk menghapus data pembelian berdasarkan ID
    public function deletePurchase($purchaseId) {
        return $this->purchaseModel->deletePurchase($purchaseId);
    }
}