<?php

namespace App\Models\Dao;

use App\Models\Models\Staff;

interface StaffDaoInterface{
    public function getAllStaffs();
    public function getStaffById($id);
    public function countStaffWithStoreId($id);
    public function deleteStaffById($id);
    public function createStaff(Staff $staff);
    public function updateStaff(Staff $staff);
    
}

