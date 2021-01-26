<?php

namespace App\Models\Models;

use JsonSerializable;
use App\Models\Models\Store;

class Staff implements JsonSerializable{

	private $username;
	private $password;
	private $id;
	private $email;
	private	$phone;
	private	$active;
	private $name;
	private $names;
	private $manager;
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

	public function getEmail(){
		return $this->email;
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
		return $this->names;
	}
	public function setNames($names){
		$this->name = $names;
	}

	public function getManager(){
		return $this->manager;
	}
	public function setManager($manager){
		$this->manager = $manager;
	}
	

	public function getStore(): Store{
		return $this->store;
	}
	public function setStore(Store $store){
		$this->store = $store;
	}

	public function jsonSerialize(){
		return [
			"id" => $this->id,
			"first_name" => $this->name,
			"last_name" => $this->names,
			"email" =>  $this->email,
			"phone" =>  $this->phone,
			"active" =>  $this->active,
			"manager_id" =>  $this->manager,
			"password" =>  $this->password,
		];
	}
}
