<?php

namespace App\Models\Models;
class Store{

	private $id;
	private string $name;
	private $phone;
	private $email;
	private $street;
	private $city;
	private $state;
	private $zipCode;


	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
	}

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getPhone()
	{
		return $this->phone;
	}
	public function setPhone($phone)
	{
		$this->phone = $phone;
	}

	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getStreet()
	{
		return $this->street;
	}
	public function setStreet($street)
	{
		$this->street = $street;
	}

	public function getCity()
	{
		return $this->city;
	}
	public function setCity($city)
	{
		$this->city = $city;
	}

	public function getState()
	{
		return $this->state;
	}
	public function setState($state)
	{
		$this->state = $state;
	}

	public function getZipCode()
	{
		return $this->zipCode;
	}
	public function setZipCode(string $zipCode)
	{
		$this->zipCode = $zipCode;
	}
}
