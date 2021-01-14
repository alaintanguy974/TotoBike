<?php

namespace App\Models\Manager;

use App\Exceptions\StaffException;
use App\Models\Dao\StaffaoInterface;
use App\Models\Manager\StaffManagerInterface;
use App\Models\Models\Staff;

class StaffManagerImpl implements StaffManagerInterface{

    private $StaffDao;
   

    public function __construct(StaffDaoInterface $staffDao){
        $this->staffDao = $staffDao;
       
    }

    public function getAllStaffs() {
        return $this->staffDao->getAllStaffs();
    }

    public function createStaff(Staff $staff){
        $this->staffDao->createStaff($staff);
    }

    public function getStaffById($id){
        return $this->StaffDao->getStaffById($id);
    }

    public function updateCategory(Staff $staff){
        $this->staffDao->updateStaff($staff);
    }

    public function deleteStaffById($id){   
        $this->staffDao->deleteStafftById($id);
    }
}
