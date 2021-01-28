<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class CategoryException extends Exception{

    public function render(){
        return view('error');
    }

    public function report(){
        error_log("une exception");
        Log::debug('Une exception');
    
}

