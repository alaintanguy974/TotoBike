<?php

namespace App\Models\dao;

use App\Exceptions\DaoException;
use App\Models\Dao\StaffDaoInterface;
use App\Models\Models\Staff;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StaffDaoImpl implements StaffDaoInterface
{

    public function getAllStaffs()
    {

        $resultbdd = DB::select('exec dbo.get_all_Staffs');

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
    public function getStaffById($id){
        
            $bdd = DB::getStaff();
            $reponse = $bdd->query("SELECT * FROM sales.staffs WHERE staff_id='" . $id . "'");
            $resultbdd = $reponse->fetch();

            $staff = new Staff();
            $staff->setId($resultbdd['staff_id']);
            $staff->setNames($resultbdd['first_name']);
            $staff->setName($resultbdd['last_name']);
            $staff->setEmail($resultbdd['email']);
             $staff->setPhone($resultbdd['phone']);
            $staff->setActive($resultbdd['active']);
            $staff->setPassword($resultbdd['password']);            

            return $staff;
     
    }
    public function createStaff(Staff $staff)    {
        $resultbdd = DB::insert("INSERT INTO sales.staffs (first_name, laste_name, email, phone, active, pasword) values(?,?,?,?,?,?)", 
        [$staff->getNames(), $staff->getName(), $staff->getEmail(), $staff->getPhone(), $staff->getActive(), $staff->getPassword()]);
    }

    public function updateStaff(Staff $staff)
    {
        $resultbdd = DB::update("UPDATE sales.staffs set laste_name = ? WHERE Staff_id = ?", [$staff->getName(), $staff->getId()]);
    }

    public function deleteStaffById($id)
    {
        $resultbdd = DB::delete("DELETE FROM sales.staffs WHERE staff_id = ?", [$id]);
    }
}
