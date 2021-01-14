<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class UserNotFoundException extends Exception
{
    /**
     * Report or log an exception.
     *
     * @return void
     */
    public function report()
    {
        Log::debug('User not found');
    }

   /* public function render()
    {
        return view('welcome');
    }*/

}
