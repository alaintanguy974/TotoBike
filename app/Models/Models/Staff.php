<?php

namespace App\Models\Models;

use App\Models\Models\Store;
class Staff{

     private $username;
    private $password;
    private Store $store;

    public function getUsername(){
		return $this->username;
	}
	public function setUsername($username){
		$this->username = $username;
	}

	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}

	public function getPassword(){
		return $this->password;
	}
	public function setPassword($password){
		$this->password = $password;
	}
	
   
	public function setEmail($email){
		$this->email = $email;
	}

	public function getPhone(){
		return $this->phone;
	}
	public function setPhone($phone){
		$this->phone = $phone;
	}

	public function getActive(){
		return $this->active;
	}
	public function setActive($active){
		$this->active = $active;
	}

	public function getName(){
		return $this->name;
	}
	public function setName($name){
		$this->name = $name;
	}

	public function getNames(){
		return $this->getNames();
	}
	public function setNames($names){
		$this->name = $names;
	}

}