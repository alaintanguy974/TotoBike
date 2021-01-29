<?php

namespace App\Models\Dao;

use App\Models\Dao\StoreDaoInterface;
use App\Models\Dao\StaffDaoInterface;
use App\Models\Models\Staff;
use Illuminate\Support\Facades\DB;


class StaffDaoImpl implements StaffDaoInterface{


    private $storeDao;

    public function __construct(StoreDaoInterface $storeDao){
        $this->storeDao = $storeDao;
    }

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
            $staff->setManager($row->manager_id);
            $staff->setPassword($row->password);

            $store = $this->storeDao->getStoreById($row->store_id);
            $staff->setstore($store);

            array_push($allStaffs, $staff);
        }

        return $allStaffs;
    }

    public function getStaffById($id)
    {
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM sales.staffs WHERE staff_id = '" . $id . "'");
        $resultbdd = $reponse->fetch();


        $staff = new Staff();
        $staff->setId($resultbdd['staff_id']);
        $staff->setNames($resultbdd['first_name']);
        $staff->setName($resultbdd['last_name']);
        $staff->setEmail($resultbdd['email']);
        $staff->setPhone($resultbdd['phone']);
        $staff->setActive($resultbdd['active']);
        $staff->setManager($resultbdd['manager_id']);
        $staff->setPassword($resultbdd['password']);

        $store = $this->storeDao->getStoreById($resultbdd['store_id']);
        $staff->setstore($store);

        return $staff;
    }

    public function countStaffWithStoreId($id){
        return DB::select("select count(*) as count from sales.staffs where store_id=" . $id)[0]->count;
    }

    public function createStaff(Staff $staff){
        $resultbdd = DB::insert(
            "INSERT INTO sales.staffs (first_name, last_name, email, phone, active, manager_id, password ) values(?,?,?,?,?,?,?)",
            [$staff->getNames(), $staff->getName(), $staff->getEmail(), $staff->getPhone(), $staff->getActive(), $staff->getManager(), $staff->getPassword()]
        );
    }

    public function updateStaff(Staff $staff)
    {
        $resultbdd = DB::update("UPDATE sales.staffs set first_name, last_name, email, phone, active, manager_id, password = (?,?,?,?,?,?,?)
         WHERE staff_id = ?", [$staff->getNames(), $staff->getName(), $staff->getEmail(), $staff->getPhone(), $staff->getActive(), $staff->getManager(), $staff->getPassword(), $allStaffs->getId()]);
    }

    public function deleteStaffById($id)
    {
        $resultbdd = DB::delete("DELETE FROM sales.staffs WHERE staff_id = ?", [$id]);
    }
}  
