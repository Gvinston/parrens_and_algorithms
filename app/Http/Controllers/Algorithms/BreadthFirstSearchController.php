<?php

namespace App\Http\Controllers\Algorithms;

use App\Http\Controllers\Controller;
use App\Services\Algorithms\BinarySearch;
use App\Services\Algorithms\BreadthFirstSearch;


class BreadthFirstSearchController extends Controller
{
    public function get(BreadthFirstSearch $breadthFirstSearch)
    {
        $graph = [];
        $graph['you'] = ['bob', 'milly', 'jonny'];
        $graph['milly'] = ['bob'];
        $graph['thom'] = ['sam', 'sara', 'iamhere'];
        $graph['jonny'] = [];
        $graph['sara'] = [];
        $graph['clare'] = [];
        $graph['bob'] = ['thom'];
        $graph['iamhere'] = [];

        $needPerson = $breadthFirstSearch->handle($graph);

        if (!$needPerson) {
            echo 'Нужный человек не найден';
        } else {
            echo "Мы его нашли. Вот он - $needPerson";
        }
    }
}
