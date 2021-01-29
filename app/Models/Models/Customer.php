<?php

namespace App\Models\Models;

use JsonSerializable;

class Customer implements JsonSerializable{
    private $id;
    private $names;
    private $name;
    private $phone;
    private $email;
    private $street;
    private $city;
    private $state;
    private $zipCode;


    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getNames(){
        return $this->names;
    }
    public function setNames($names){
        $this->names = $names;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getPhone(){
        return $this->phone;
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getStreet(){
        return $this->street;
    }
    public function setStreet($street){
        $this->street = $street;
    }

    public function getCity(){
        return $this->city;
    }
    public function setCity($city){
        $this->city = $city;
    }

    public function getState(){
        return $this->state;
    }
    public function setState($state){
        $this->state = $state;
    }

    public function getZipCode(){
        return $this->zipCode;
    }
    public function setZipCode(string $zipCode){
        $this->zipCode = $zipCode;
    }

    public function jsonSerialize()
    {
        return [
           "id" => $this->id,
           "first_name" => $this->names,
           "last_name" => $this->name,
           "list_price" =>  $this->price,
           "phone"=> $this->phone,
           "email"=> $this->email,
           "street" => $this->street,
           "city" => $this->city,
           "state" => $this->state,
           "zip_code"=> $this->zipCode
       
        ];
    }

}

