<?php

namespace App\Http\Controllers;


use App\Models\Manager\ComplexRequestManagerInterface;

use Symfony\Component\HttpFoundation\JsonResponse;

class ComplexRequestController extends Controller{

    public function getBrandQuantityByCategoryJson(ComplexRequestManagerInterface $complexManager){
        return new JsonResponse($complexManager->getBrandQuantityByCategory());
    }
}