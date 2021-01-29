<?php

namespace App\Models\Dao;


use App\Models\Dao\CustomerDaoInterface;
use App\Models\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerDaoImpl implements CustomerDaoInterface{
    public function getCustomerById($id)
    {
        $resultbdd = DB::select("select * from sales.customers where customer_id=?", [$id]);

        $customer = new Customer();
        $customer->setId($resultbdd[0]->customer_id);
        $customer->setName($resultbdd[0]->customer_name);

        return $customer;
    }


    public function getAllCustomers()
    {
        $resultbdd = DB::select("exec get_all_customers");

        $allCustomers = [];
        foreach ($resultbdd as $i => $row) {
            $customer = new Customer();
            $customer->setId($row->store_id);
            $customer->setName($row->store_name);
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
    
}
