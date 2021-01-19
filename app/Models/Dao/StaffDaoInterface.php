<?php

namespace App\Models\Dao;

use App\Models\Models\Staff;

interface StaffDaoInterface{
    public function getAllStaffs();
    public function getStaffById($id);

}

