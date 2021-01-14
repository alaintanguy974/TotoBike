<?php

declare(strict_types=1);

namespace App\Auth\Guards;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class PinGuard implements Guard
{

    /**
     * @var null|Authenticatable|User
     */
    protected $user;

    /**
     * @var Request
     */
    protected $request;

    private $userDao;

    /**
     * OpenAPIGuard constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request, $userDao)
    {
        $this->userDao = $userDao;
        $this->request = $request;
    }


    /**
     * Determine if the current user is authenticated.
     *
     * @return bool
     */
    public function check(){
        return (bool)$this->user;
    }

    /**
     * Determine if the current user is a guest.
     *
     * @return bool
     */
    public function guest(){
        return !$this->check();
    }

    /**
     * Get the currently authenticated user.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function user(){
        //return $this->user ?: $this->signInWithPin();
        
    }

    /**
     * Get the ID for the currently authenticated user.
     *
     * @return int|string|null
     */
    public function id(){
        return $this->user()->id ?? null;
    }

    /**
     * Validate a user's credentials.
     *
     * @param  array  $credentials
     * @return bool
     */
    public function validate(array $credentials = []){
        throw new \BadMethodCallException('Unexpected method call');
    }

    /**
     * Set the current user.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @return void
     */
    public function setUser(Authenticatable $user){
        $this->user = $user;
        return $this;
    }
}