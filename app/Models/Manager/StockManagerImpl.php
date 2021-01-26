<?php

namespace App\Models\Manager;

use App\Models\Dao\StockDaoInterface;
use App\Models\Manager\StockManagerInterface;

class StockManagerImpl implements StockManagerInterface
{

    private $stockDao;

    public function __construct(StockDaoInterface $stockDao)
    {
        $this->stockDao = $stockDao;
    }

    public function getAllStocks()
    {
        return $this->stockDao->getAllStocks();
    }
} 
