<?php

namespace App\Models\Models;

use JsonSerializable;

class Brand implements JsonSerializable{

	private $id;
	private $name;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}
	
	public function setName( $name){
		$this->name = $name;
	}

	public function jsonSerialize()	{
		return [
			"id" => $this->id,
			"name" => $this->name
		];
	}

}
