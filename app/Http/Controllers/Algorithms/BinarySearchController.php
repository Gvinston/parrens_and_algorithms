<?php

namespace App\Http\Controllers\Algorithms;

use App\Http\Controllers\Controller;
use App\Services\Algorithms\BinarySearch;


class BinarySearchController extends Controller
{
    public function get()
    {
        $data = [1,2,3,4,5,6,7,8,9,10];
        echo BinarySearch::handle($data, 10);
    }
}
