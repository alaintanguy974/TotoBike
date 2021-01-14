<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class LoginException extends Exception
{

    public function report()
    {
        Log::debug('Mauvais credentials');
    }
}