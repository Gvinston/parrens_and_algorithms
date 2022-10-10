<?php

namespace App\Services\Algorithms;

class AlgorithmDijkstra
{
    public function handle(array &$graph, array &$costs, array &$parents)
    {
        $processed = [];
        $node = $this->getLowestCostNode($costs, $processed);

        while ($node) {
            $cost = $costs[$node];
            $neighbors = $graph[$node];
            foreach (array_keys($neighbors) as $n) {
                $newCost = $cost + $neighbors[$n];
                if ($costs[$n] > $newCost) {
                    $costs[$n] = $newCost;
                    $parents[$n] = $node;
                }
            }
            $processed[] = $node;
            $node = $this->getLowestCostNode($costs, $processed);
        }
    }

    public function getLowestCostNode(array $costs, array $processed): ?string
    {
        $lowestCost = INF;
        $lowestCostNode = null;

        foreach ($costs as $node => $cost) {
            if (($cost < $lowestCost) && !in_array($node, $processed)) {
                $lowestCost = $cost;
                $lowestCostNode = $node;
            }
        }

        return $lowestCostNode;
    }
}
