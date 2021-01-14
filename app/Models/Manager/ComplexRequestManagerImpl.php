<?php

namespace App\Models\Manager;

use App\Models\Dao\ComplexRequestDaoInterface;

class ComplexRequestManagerImpl implements ComplexRequestManagerInterface
{
    private $complexRequestDao;

    public function __construct(ComplexRequestDaoInterface $complexDao )
    {
        $this->complexRequestDao = $complexDao;
    }

    public function getBrandQuantityByCategory(){
        return $this->complexRequestDao->getBrandQuantityByCategory();
    }
}