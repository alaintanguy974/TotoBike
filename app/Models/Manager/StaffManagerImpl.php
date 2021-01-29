<?php

namespace App\Models\Manager;

use App\Models\Dao\StaffDaoInterface;
use App\Models\Manager\StaffManagerInterface;

class StaffManagerImpl implements StaffManagerInterface{

    private $staffDao;


    public function __construct(StaffDaoInterface $staffDao){
        $this->staffDao = $staffDao;
    }

    public function getAllStaffs(){
        return $this->staffDao->getAllStaffs();
    }
    public function getStaffById($id){
        return $this->staffDao->getStaffById($id);
    }
    public function countStaffWithStoreId($id)    {
        return $this->staffDao->counttafftWithStroredId($id);
    }

    public function createStaff($staff){
        $this->staffDao->createStaff($staff);
    }

    public function updateStaff($staff){
        $this->staffDao->updateStaff($staff);
    }

    public function deleteStaffById($id){
        $this->staffDao->deleteStaffById($id);
    }

}

