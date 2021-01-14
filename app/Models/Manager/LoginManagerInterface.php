<?php

namespace App\Models\Manager;


interface LoginManagerInterface{
    public function logIn($username, $password);
}