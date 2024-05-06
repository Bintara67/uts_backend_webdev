<?php
require_once_database.php';

class Sales {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllSales() {
        $stmt = $this->pdo->query("SELECT * FROM sales");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSalesById($orderId) {
        $stmt = $this->pdo->prepare("SELECT * FROM sales WHERE order_id = :id");
        $stmt->execute(['id' => $orderId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addSales($sales) {
        $stmt = $this->pdo->prepare("
            INSERT INTO sales 
            (product_name, product_description, gross_product_price, tax_per_product, quantity_purchased, gross_revenue, total_tax, net_revenue, product_category, sku_number, weight, color, size, rating, stock, sales_rep, address, zipcode, phone, email, loyalty_points, customer_id, country_id) 
            VALUES 
            (:product_name, :product_description, :gross_product_price, :tax_per_product, :quantity_purchased, :gross_revenue, :total_tax, :net_revenue, :product_category, :sku_number, :weight, :color, :size, :rating, :stock, :sales_rep, :address, :zipcode, :phone, :email, :loyalty_points, :customer_id, :country_id)
        ");

        $stmt->execute([
            'product_name' => $sales['product_name'],
            'product_description' => $sales['product_description'],
            'gross_product_price' => $sales['gross_product_price'],
            'tax_per_product' => $sales['tax_per_product'],
            'quantity_purchased' => $sales['quantity_purchased'],
            'gross_revenue' => $sales['gross_revenue'],
            'total_tax' => $sales['total_tax'],
            'net_revenue' => $sales['net_revenue'],
            'product_category' => $sales['product_category'],
            'sku_number' => $sales['sku_number'],
            'weight' => $sales['weight'],
            'color' => $sales['color'],
            'size' => $sales['size'],
            'rating' => $sales['rating'],
            'stock' => $sales['stock'],
            'sales_rep' => $sales['sales_rep'],
            'address' => $sales['address'],
            'zipcode' => $sales['zipcode'],
            'phone' => $sales['phone'],
            'email' => $sales['email'],
            'loyalty_points' => $sales['loyalty_points'],
            'customer_id' => $sales['customer_id'],
            'country_id' => $sales['country_id']
        ]);
    }

    public function updateSales($orderId, $salesData) {
        $stmt = $this->pdo->prepare("
            UPDATE sales SET 
            product_name = :product_name, 
            product_description = :product_description, 
            gross_product_price = :gross_product_price, 
            tax_per_product = :tax_per_product, 
            quantity_purchased = :quantity_purchased, 
            gross_revenue = :gross_revenue, 
            total_tax = :total_tax, 
            net_revenue = :net_revenue, 
            product_category = :product_category, 
            sku_number = :sku_number, 
            weight = :weight, 
            color = :color, 
            size = :size, 
            rating = :rating, 
            stock = :stock, 
            sales_rep = :sales_rep, 
            address = :address, 
            zipcode = :zipcode, 
            phone = :phone, 
            email = :email, 
            loyalty_points = :loyalty_points, 
            customer_id = :customer_id, 
            country_id = :country_id 
            WHERE order_id = :id
        ");

        $stmt->execute([
            'id' => $orderId,
            'product_name' => $sales['product_name'],
            'product_description' => $sales['product_description'],
            'gross_product_price' => $sales['gross_product_price'],
            'tax_per_product' => $sales['tax_per_product'],
            'quantity_purchased' => $sales['quantity_purchased'],
            'gross_revenue' => $sales['gross_revenue'],
            'total_tax' => $sales['total_tax'],
            'net_revenue' => $sales['net_revenue'],
            'product_category' => $sales['product_category'],
            'sku_number' => $sales['sku_number'],
            'weight' => $sales['weight'],
            'color' => $sales['color'],
            'size' => $sales['size'],
            'rating' => $sales['rating'],
            'stock' => $sales['stock'],
            'sales_rep' => $sales['sales_rep'],
            'address' => $sales['address'],
            'zipcode' => $sales['zipcode'],
            'phone' => $sales['phone'],
            'email' => $sales['email'],
            'loyalty_points' => $sales['loyalty_points'],
            'customer_id' => $sales['customer_id'],
            'country_id' => $sales['country_id']
        ]);
    }

    public function deleteSales($orderId) {
        $stmt = $this->pdo->prepare("DELETE FROM sales WHERE order_id = :id");
        $stmt->execute(['id' => $orderId]);
    }
}
