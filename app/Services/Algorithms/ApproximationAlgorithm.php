<?php

namespace App\Services\Algorithms;

class ApproximationAlgorithm
{
    public function handle(\Ds\Set $statesNeeded, array $stations): \Ds\Set
    {
        $finalStations = new \Ds\Set();

        while(count($statesNeeded) > 0) {
            $bestStation = null;
            $statesCovered = new \Ds\Set();
            foreach ($stations as $station => $stateOfStation) {
                $covered = $statesNeeded->intersect($stateOfStation);
                if (count($covered) > count($statesCovered)) {
                    $bestStation = $station;
                    $statesCovered = $covered;
                }
            }

            $statesNeeded = $statesNeeded->diff($statesCovered);
            $finalStations->add($bestStation);
        }

        return $finalStations;
    }
}
