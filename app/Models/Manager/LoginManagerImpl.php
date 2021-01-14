<?php

namespace App\Models\Manager;

use App\Exceptions\LoginException;
use App\Models\Dao\LoginDaoInterface;
use App\Models\Manager\LoginManagerInterface;
use Illuminate\Support\Facades\Session;

class LoginManagerImpl implements LoginManagerInterface
{

   private $loginDao;

    public function __construct(LoginDaoInterface $loginDao){
        $this->loginDao = $loginDao;
    }

    public function logIn($username, $password){
        
        $authenticated = $this->loginDao->logIn($username, $password) != 0;
        if($authenticated){
            Session::put("connection", 'true');
        }else{
            throw new LoginException();
        }
    }
}
