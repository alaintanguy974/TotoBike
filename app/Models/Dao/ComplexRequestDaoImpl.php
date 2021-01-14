<?php

namespace App\Models\dao;

use App\Models\Dao\ComplexRequestDaoInterface;
use Illuminate\Support\Facades\DB;

class ComplexRequestDaoImpl implements ComplexRequestDaoInterface{

    public function getBrandQuantityByCategory(){
        return DB::select("exec get_stock_category");
    }
}