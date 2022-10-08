<?php

namespace App\Services\Algorithms;

class QuickSort
{
    public function handle(array $data)
    {
        if(count($data) < 2) {
            return $data;
        }

        $pivot = array_shift($data);
        $less = [];
        $more = [];

        foreach ($data as $num) {
            if ($num <= $pivot) {
                $less[] = $num;
            } else {
                $more[] = $num;
            }
        }

        return array_merge($this->handle($less), [$pivot], $this->handle($more));
    }
}
