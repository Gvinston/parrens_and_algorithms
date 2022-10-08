<?php

namespace App\Services\Algorithms;

class Recursion
{
    public function sum(array $data): int
    {
        if (empty($data)) {
            return 0;
        } else {
            return array_shift($data) + $this->sum($data);
        }
    }

    public function count(array $data): int
    {
        if (empty($data)) {
            return 0;
        } else {
            array_shift($data);
            return 1 + $this->count($data);
        }
    }

    public function getMax(array $data, int $currentMaxNum = 0): int
    {
        if (empty($data)) {
            return $currentMaxNum;
        }
        $number = array_shift($data);

        if ($number > $currentMaxNum) {
            $currentMaxNum = $number;
        }

        return $this->getMax($data, $currentMaxNum);
    }
}
