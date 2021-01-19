<?php

namespace App\Models\Manager;

use App\Models\Models\Staff;

interface StaffManagerInterface
{
    public function getAllStaffs();
    public function getStaffById($id);
    
}
