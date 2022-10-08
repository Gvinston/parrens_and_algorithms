<?php

namespace App\Services\Algorithms;

class SelectionSort
{
    public function getIndexForMaxValue(array $data): int
    {
        $index = 0;
        $number = $data[$index];

        foreach ($data as $key => $value) {
            if ($value > $number) {
                $number = $value;
                $index = $key;
            }
        }

        return $index;
    }

    public function handle(array $data): array
    {
        $sortedData = [];
        $countData = count($data);

        for ($i = 1; $i <= $countData; $i++) {
            $index = $this->getIndexForMaxValue($data);
            $sortedData[] = $data[$index];
            unset($data[$index]);
            $data = array_values($data);
        }

        return $sortedData;
    }
}
