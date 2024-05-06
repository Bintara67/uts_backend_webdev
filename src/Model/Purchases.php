<?php
require_once_database.php';

class Purchases {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllPurchases() {
        $stmt = $this->pdo->query("SELECT * FROM purchases");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPurchaseById($purchaseId) {
        $stmt = $this->pdo->prepare("SELECT * FROM purchases WHERE purchase_id = :id");
        $stmt->execute(['id' => $purchaseId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addPurchase($purchase) {
        $stmt = $this->pdo->prepare("
            INSERT INTO purchases 
            (supplier, last_visited, return_status, warranty, purchase_date, return_policy, feedback, order_id) 
            VALUES 
            (:supplier, :last_visited, :return_status, :warranty, :purchase_date, :return_policy, :feedback, :order_id)
        ");

        $stmt->execute([
            'supplier' => $purchase['supplier'],
            'last_visited' => $purchase['last_visited'],
            'return_status' => $purchase['return_status'],
            'warranty' => $purchase['warranty'],
            'purchase_date' => $purchase['purchase_date'],
            'return_policy' => $purchase['return_policy'],
            'feedback' => $purchase['feedback'],
            'order_id' => $purchase['order_id']
        ]);
    }

    public function updatePurchase($purchaseId, $purchaseData) {
        $stmt = $this->pdo->prepare("
            UPDATE purchases SET 
            supplier = :supplier, 
            last_visited = :last_visited, 
            return_status = :return_status, 
            warranty = :warranty, 
            purchase_date = :purchase_date, 
            return_policy = :return_policy, 
            feedback = :feedback, 
            order_id = :order_id 
            WHERE purchase_id = :id
        ");

        $stmt->execute([
            'id' => $purchaseId,
            'supplier' => $purchase['supplier'],
            'last_visited' => $purchase['last_visited'],
            'return_status' => $purchase['return_status'],
            'warranty' => $purchase['warranty'],
            'purchase_date' => $purchase['purchase_date'],
            'return_policy' => $purchase['return_policy'],
            'feedback' => $purchase['feedback'],
            'order_id' => $purchase['order_id']
        ]);
    }

    public function deletePurchase($purchaseId) {
        $stmt = $this->pdo->prepare("DELETE FROM purchases WHERE purchase_id = :id");
        $stmt->execute(['id' => $purchaseId]);
    }

}
