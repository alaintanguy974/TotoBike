<?php

namespace App\Models\Dao;

use App\Models\Models\Customer;

interface CustomerDaoInterface 
{
    public function getAllCustomers();
    public function getCustomerById($id);
    public function deleteCustomerById($id);
    public function createCustomer(Customer $customer);
    public function updateCustomer(Customer $customer);
}
