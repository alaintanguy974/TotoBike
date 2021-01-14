<?php

namespace App\Models\Dao;

use App\Models\Dao\LoginDaoInterface;
use Illuminate\Support\Facades\DB;

class LoginDaoImpl implements LoginDaoInterface{

    public function logIn($username, $password){
        return DB::select("select count(*) as count from sales.staffs where email='".$username."' and password='".$password."'")[0]->count;
    }
}
