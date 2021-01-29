<?php

namespace App\Models\Manager;



class CustomerManagerInterface{

    public function getAllCustomer();
    public function getCustomerById($id);    
    public function deleteCustomerById($id);
    public function createCustomer(Customer $customer);
    public function updateCustomer(Customer $customer);
}
