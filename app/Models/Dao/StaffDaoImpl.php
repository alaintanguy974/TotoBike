<?php

namespace App\Models\dao;


use App\Models\Dao\StaffDaoInterface;
use App\Models\Models\Staff;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StaffDaoImpl implements StaffDaoInterface{

    public function getAllStaffs(){

        $resultbdd = DB::select("SELECT * FROM sales.staffs");

        $allStaffs = [];
        foreach ($resultbdd as $i => $row) {
            $staff = new Staff();
            $staff->setId($row->staff_id);
            $staff->setNames($row->first_name);
            $staff->setName($row->last_name);
            $staff->setEmail($row->email);
            $staff->setPhone($row->phone);
            $staff->setActive($row->active);
            $staff->setPassword($row->password);

            array_push($allStaffs, $staff);
        }

        return $allStaffs;
    }
    public function getStaffById($id)
    {
        $resultbdd = DB::select("select * from sales.staffs where staff_id=?", [$id]);

        $staff = new Staff();
        $staff->setId($resultbdd[0]->staff_id);
        $staff->setName($resultbdd[0]->last_name);

        return $staff;
    }
     
}
   