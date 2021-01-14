<?php

namespace App\Models\Dao;

interface LoginDaoInterface{
    public function logIn($username, $password);
}
