<?php

namespace App\Models\Models;

use App\Models\Models\Store;

class Staff 
{
     private $username;
    private $password;
    private Store $store;

    public function getUsername(){
		return $this->username;
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
    }
    public function getStore() : Store{
				return $this->Store;
	}

	public function setStore(Store $store){
		$this->store = $store;
	}

	
}