<?php

namespace App\Models\Dao;


use App\Models\Dao\CustomerDaoInterface;
use App\Models\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerDaoImpl implements CustomerDaoInterface{

    public function getCustomerById($id){
       
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM sales.customers WHERE customer_id = '" . $id . "'");
        $resultbdd = $reponse->fetch();

        $customer = new Customer();
        
        $customer->setId($resultbdd['customer_id']);
        $customer->setNames($resultbdd['first_name']);
        $customer->setName($resultbdd['last_name']);
        $customer->setPhone($resultbdd['phone']);
        $customer->setEmail ($resultbdd['email']);
        $customer->setStreet($resultbdd['street']);
        $customer->setCity($resultbdd['city']);
        $customer->setState($resultbdd['state']);
        $customer->setZipCode($resultbdd['zip_code']);

        return $customer;
    }


    public function getAllCustomers()    {
        $resultbdd = DB::select("SELECT * FROM sales.customers");

        $allCustomers = [];
        foreach ($resultbdd as $i => $row) {
            $customer = new Customer();
            $customer->setId($row->customer_id);
            $customer->setNames($row->first_name);
            $customer->setName($row->last_name);
            $customer->setPhone($row->phone);
            $customer->setEmail($row->email);
            $customer->setStreet($row->street);
            $customer->setCity($row->city);
            $customer->setState($row->state);
            $customer->setZipCode($row->zip_code);

            array_push($allCustomers, $customer);
        }

        return $allCustomers;
    }

    public function createCustomer(Customer $customer)
    {
        $resultbdd = DB::insert("INSERT INTO sales.customers (first_name, last_name, phone, email, street, city, state, zip_code) values(?,?,?,?,?,?,?,?", 
        [$customer->getNames(), $customer->getName(), $customer->getPhone(), $customer->getEmail(),  $customer->getStreet(), $customer->getCity(), $customer->getState(), $customer->getZipCode()]);
    }

    public function updateProduct(Customer $customer)
    {
        $resultbdd = DB::update("UPDATE sales.customers set first_name, last_name, phone, email, street, city, state, zip_code = (?,?,?,?,?,?,?,?)
         WHERE customer_id = ?", [$customer->getNames(), $customer->getName(), $customer->getPhone(), $customer->getEmail(),  $customer->getStreet(), $customer->getCity(), $customer->getState(), $customer->getId()]);
    }

    public function deleteCustomerById($id)
    {
        $resultbdd = DB::delete("DELETE FROM sales.customers WHERE customer_id = ?", [$id]);
    }
    
}
