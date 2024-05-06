<?php
require_once_database.php';

class Customers {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllCustomers() {
        $stmt = $this->pdo->query("SELECT * FROM customers");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCustomerById($customerId) {
        $stmt = $this->pdo->prepare("SELECT * FROM customers WHERE customer_id = :id");
        $stmt->execute(['id' => $customerId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addCustomer($customer) {
        $stmt = $this->pdo->prepare("
            INSERT INTO customers 
            (first_name, last_name, gender, email, phone_number, address, education, occupation, date_of_birth, monthly_income, credit_score, marital_status) 
            VALUES 
            (:first_name, :last_name, :gender, :email, :phone_number, :address, :education, :occupation, :date_of_birth, :monthly_income, :credit_score, :marital_status)
        ");

        $stmt->execute([
            'first_name' => $customer['first_name'],
            'last_name' => $customer['last_name'],
            'gender' => $customer['gender'],
            'email' => $customer['email'],
            'phone_number' => $customer['phone_number'],
            'address' => $customer['address'],
            'education' => $customer['education'],
            'occupation' => $customer['occupation'],
            'date_of_birth' => $customer['date_of_birth'],
            'monthly_income' => $customer['monthly_income'],
            'credit_score' => $customer['credit_score'],
            'marital_status' => $customer['marital_status'],
        ]);
    }

    public function updateCustomer($customerId, $customer) {
        $stmt = $this->pdo->prepare("
            UPDATE customers SET 
            first_name = :first_name, 
            last_name = :last_name, 
            gender = :gender, 
            email = :email, 
            phone_number = :phone_number, 
            address = :address, 
            education = :education, 
            occupation = :occupation, 
            date_of_birth = :date_of_birth, 
            monthly_income = :monthly_income, 
            credit_score = :credit_score, 
            marital_status = :marital_status
            WHERE customer_id = :id
        ");

        $stmt->execute([
            'id' => $customerId,
            'first_name' => $customer['first_name'],
            'last_name' => $customer['last_name'],
            'gender' => $customer['gender'],
            'email' => $customer['email'],
            'phone_number' => $customer['phone_number'],
            'address' => $customer['address'],
            'education' => $customer['education'],
            'occupation' => $customer['occupation'],
            'date_of_birth' => $customer['date_of_birth'],
            'monthly_income' => $customer['monthly_income'],
            'credit_score' => $customer['credit_score'],
            'marital_status' => $customer['marital_status'],
        ]);
    }

    public function deleteCustomer($customerId) {
        $stmt = $this->pdo->prepare("DELETE FROM customers WHERE customer_id = :id");
        $stmt->execute(['id' => $customerId]);
    }
}
