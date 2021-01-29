<?php

namespace App\Models\Manager;

use App\Models\Models\Customer;

interface CustomerManagerInterface{

    public function getAllCustomers();
    public function getCustomerById($id);    
    public function deleteCustomerById($id);
    public function createCustomer(Customer $customer);
    public function updateCustomer(Customer $customer);
}
