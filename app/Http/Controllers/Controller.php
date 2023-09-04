<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    1111111111111;
    3333333333333;
    1111111111;
    444444444;
    55555555555;

    function c2(){
        $a = 2;
        $b = 2;
        return 123;
    }

    function create()
    {
        $name = 1;
        $job = 2;
        return 123;
    }

    function c3(){
        $a = 3;
        $b = 3;
        return 333;
    }
    function c4(){
        $a = 4;
        $b = 4;
        return 444;
    }
}
