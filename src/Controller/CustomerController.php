<?php
require_once __DIR__ . '/../Model/Customers.php';

class CustomerController {
    private $customerModel;

    public function __construct($pdo) {
        $this->customerModel = new Customers($pdo);
    }

    //metode untuk mendapatkan semua data customer
    public function getAllCustomers() {
        return $this->customerModel->getAllCustomers();
    }

    //metode untuk mendapatkan data customer berdasarkan ID
    public function getCustomerById($customerId) {
        return $this->customerModel->getCustomerById($customerId);
    }

    //metode untuk menambahkan data customer baru
    public function addCustomer($customerData) {
        return $this->customerModel->addCustomer($customerData);
    }

    //metode untuk memperbarui data customer berdasarkan ID
    public function updateCustomer($customerId, $customerData) {
        return $this->customerModel->updateCustomer($customerId, $customerData);
    }

    //metode untuk menghapus data customer berdasarkan ID
    public function deleteCustomer($customerId) {
        return $this->customerModel->deleteCustomer($customerId);
    }
}
