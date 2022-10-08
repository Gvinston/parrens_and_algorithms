<?php

namespace App\Services\Patterns\Behavioral\Strategy;

class ConcreteStrategyB implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}
