<?php

namespace App\Http\Controllers\Algorithms;

use App\Http\Controllers\Controller;
use App\Services\Algorithms\Recursion;


class RecursionController extends Controller
{
    public function sum(Recursion $recursion)
    {
        $data = [1,2,3,4,5,6,7,8,9,10,45];
        echo $recursion->sum($data);
    }

    public function count(Recursion $recursion)
    {
        $data = [1,2,3,4,5,6,7,8,9,10,45];
        echo $recursion->count($data);
    }

    public function getMax(Recursion $recursion)
    {
        $data = [1,2,3,4,5,102,6,7,8,9,10,45];
        echo $recursion->getMax($data);
    }
}
