<?php

namespace App\Services\Algorithms;

class BinarySearch
{
    public static function handle(array $data, int $item): ?int
    {
        $low = 0;
        $high = count($data) - 1;

        while($low <= $high) {
            $mid = floor(($low + $high) / 2);
            $guess = $data[$mid];
            if ($guess == $item)
                return $mid;
            if ($guess > $item)
                $high = $mid - 1;
            else
                $low = $mid + 1;
        }

        return null;
    }
}
