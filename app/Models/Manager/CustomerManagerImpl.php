<?php

namespace App\Models\Manager;

use App\Models\Dao\CustomerDaoInterface;
use App\Models\Manager\CustomerManagerInterface;


class CustomerManagerImpl implements CustomerManagerInterface{

    private $customerDao;

    public function __construct(CustomerDaoInterface $customerDao){
        $this->customerDao = $customerDao;
    }

    public function getAllCustomers(){
        return $this->customerDao->getAllCustomers();
    }

    public function getCustomerById($id){
        return $this->customerDao->getCustomerById($id);
    }
    public function createCustomer( $customer){
        $this->customerDao->createCustomer($customer);
    }

   

    public function updateCustomer( $customer){
        $this->customerDao->updateCustomer( $customer);
    }

    public function deleteCustomerById($id){       
        $this->customerDao->deleteCustomerById($id);
    }    
}
