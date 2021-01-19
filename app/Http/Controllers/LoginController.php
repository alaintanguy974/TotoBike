<?php

namespace App\Http\Controllers;


use App\Exceptions\LoginException;
use App\Http\Requests\LoginRequest;
use App\Models\Manager\LoginManagerInterface;
use Illuminate\Http\Request;


class LoginController extends Controller{
    public function index(){
        return view('login');
    }

    public function login(LoginRequest $request, LoginManagerInterface $loginManager){
        $username = $request->input(['username']);
        $password = $request->input(['pass']);

        try{
            $loginManager->logIn($username, $password);
            return redirect('/');
        } catch(LoginException $e){
            return redirect()->back();
        }
        
    }
}

