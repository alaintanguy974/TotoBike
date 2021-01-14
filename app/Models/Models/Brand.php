<?php

namespace App\Models\Models;

use JsonSerializable;

class Brand implements JsonSerializable{

    private $id;
    private string $name;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName() : string {
		return $this->name;
	}

	public function setName(string $name){
		$this->name = $name;
	}

	public function jsonSerialize()
    {
		return [
			"id" => $this->id,
			"name" => $this->name
		];
	}

}