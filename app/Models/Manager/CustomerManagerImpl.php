<?php

namespace App\Models\Manager;


use App\Models\Dao\CustomerDaoInterface;
use App\Models\Manager\CustomerManagerInterface;
use App\Models\Models\Customer;

class CustomerManagerImpl implements CustomerManagerInterface
{

    private $brandDao;

    public function __construct(CustomerDaoInterface $customerDao){
        $this->CustomerDao = $customerDao;
    }

    public function getAllCustomers(){
        return $this->customerDao->getAllCustomers();
    }

    public function createCustomer(Customer $customer){
        $this->customerDao->createCustomer($customer);
    }

    public function getCustomerById($id){
        return $this->customerDao->getCustomerById($id);
    }

    public function updateCustomer(Customer $customer){
        $this->customerDao->updateCustomer( $customer);
    }

    public function deleteCustomerById($id){
        $this->customerManagerInterface->countCustomerWithCustomerId($id) == [0]; 
        $this->customerDao->deleteCustomerById($id);
    }    
}
