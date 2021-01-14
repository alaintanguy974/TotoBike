<?php

namespace App\Models\Models;

use JsonSerializable;
use App\Models\Models\Category;
use App\Models\Models\Brand;


class Product implements JsonSerializable{
    private $id;
    private $name;
    private $year;
	private $price;

	private Category $category;
	private Brand $brand;
	

    public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}
	public function setName($name){
		$this->name = $name;
	}

	public function getYear(){
		return $this->year;
	}
	public function setYear($year){
		$this->year = $year;
	}

	public function getPrice(){
		return $this->price;
	}
	public function setPrice($price){
		$this->price = $price;
	}

	public function getCategory() : Category{
		return $this->category;
	}
	public function setCategory(Category $category){
		$this->category = $category;
	}

	public function getBrand() : Brand	{
		return $this->brand;
	}
	public function setBrand(Brand $brand){
		$this->brand = $brand;
	}

		public function jsonSerialize(){
		return [
			"id" => $this->id,
			"name" => $this->name,
			"model_year" => $this-> year,
         	"list_price" =>  $this-> price
		];
	}
}
