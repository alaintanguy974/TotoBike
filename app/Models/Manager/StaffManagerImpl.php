<?php

namespace App\Models\Manager;

use App\Models\Manager\StaffDaoInterface;
use App\Models\Manager\StaffManagerInterface;


class StaffManagerImpl implements StaffManagerInterface{

    private $staffDao;
   

    public function __construct(StaffDaoInterface $staffDao){
        $this->staffDao = $staffDao;       
    }

    public function getAllStaffs() {
        return $this->staffDao->getAllStaffs();
    }

    public function getStaffById($id){
        return $this->StaffDao->getStaffById($id);
    }
   
}
