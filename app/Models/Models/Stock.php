<?php

namespace App\Models\Models;

use App\Models\Models\Product;
use App\Models\Models\Store;

class Stock
{
	private $quantity;
	private Product $product;
	private Store $store;

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
	}

	public function getProduct(): Product
	{
		return $this->product;
	}

	public function setProduct(Product $product)
	{
		$this->product = $product;
	}
	public function getStore(): Store
	{
		return $this->store;
	}

	public function setStore(Store $store)
	{
		$this->store = $store;
	}
}
