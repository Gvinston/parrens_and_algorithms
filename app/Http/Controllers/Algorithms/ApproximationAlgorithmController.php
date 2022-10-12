<?php

namespace App\Http\Controllers\Algorithms;

use App\Http\Controllers\Controller;
use App\Services\Algorithms\AlgorithmDijkstra;
use App\Services\Algorithms\ApproximationAlgorithm;
use App\Services\Algorithms\BinarySearch;
use App\Services\Algorithms\BreadthFirstSearch;


class ApproximationAlgorithmController extends Controller
{
    public function get(ApproximationAlgorithm  $approximationAlgorithm)
    {
        $statesNeeded = new \Ds\Set(['mt', 'wa', 'or', 'id', 'nv', 'ut', 'ca', 'az']);

        $stations = [];
        $stations['kone'] = new \Ds\Set(['id', 'nv', 'ut']);
        $stations['ktwo'] = new \Ds\Set(['wa', 'id', 'mt']);
        $stations['kthree'] = new \Ds\Set(['or', 'nv', 'ca']);
        $stations['kfor'] = new \Ds\Set(['nv', 'ut']);
        $stations['kfive'] = new \Ds\Set(['ca', 'az']);

        $finalStations = $approximationAlgorithm->handle($statesNeeded, $stations);

        echo 'Минимальный набор станций, который покрывает все штаты: ' . $finalStations->join(', ');
    }


}
