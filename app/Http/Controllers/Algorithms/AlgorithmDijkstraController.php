<?php

namespace App\Http\Controllers\Algorithms;

use App\Http\Controllers\Controller;
use App\Services\Algorithms\AlgorithmDijkstra;
use App\Services\Algorithms\BinarySearch;
use App\Services\Algorithms\BreadthFirstSearch;


class AlgorithmDijkstraController extends Controller
{
    public function get(AlgorithmDijkstra $algorithmDijkstra)
    {
        $graph = [];
        $graph['start']['pl'] = 5;
        $graph['start']['po'] = 0;
        $graph['pl']['ba'] = 20;
        $graph['pl']['bas'] = 15;
        $graph['bas']['fin'] = 20;
        $graph['ba']['fin'] = 10;
        $graph['po']['bas'] = 30;
        $graph['po']['ba'] = 35;
        $graph['fin'] = [];

        $costs = [];
        $costs['pl'] = 5;
        $costs['po'] = 0;
        $costs['ba'] = INF;
        $costs['bas'] = INF;
        $costs['fin'] = INF;

        $parents = [];
        $parents['pl'] = 'start';
        $parents['po'] = 'start';
        $parents['ba'] = null;
        $parents['bas'] = null;
        $parents['fin'] = null;

        $algorithmDijkstra->handle($graph, $costs, $parents);

        dump($parents, $costs);

        echo "Наименьший вес составляет {$costs['fin']} <br>";

        $path = ['fin'];
        $node = $parents['fin'];
        while($node) {
            $path[] = $node;
            $node = $parents[$node] ?? null;
        }
        echo "Путь с наименьшим весом " . implode('->', array_reverse($path));
    }


}
