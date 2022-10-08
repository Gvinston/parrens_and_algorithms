<?php

namespace App\Http\Controllers\Algorithms;

use App\Http\Controllers\Controller;
use App\Services\Algorithms\QuickSort;


class QuickSortController extends Controller
{
    public function get(QuickSort $quickSort)
    {
        $data = [3,10,1,4,7,6,5,88,8,9,2,13,12,11,0];
        dump($quickSort->handle($data));
    }
}
