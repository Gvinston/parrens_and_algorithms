<?php

namespace App\Http\Controllers\Algorithms;

use App\Http\Controllers\Controller;
use App\Services\Algorithms\SelectionSort;
use App\Services\Patterns\Builder;


class SelectionSortController extends Controller
{
    public function get(SelectionSort $selectionSort)
    {
        $data = [3,10,1,4,7,6,5,8,9,2,13,12,11];
        dump($selectionSort->handle($data));
    }
}
