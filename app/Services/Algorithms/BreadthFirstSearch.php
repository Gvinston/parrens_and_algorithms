<?php

namespace App\Services\Algorithms;

class BreadthFirstSearch
{
    /**
     * Алгорити поиска в ширину
     *
     * @param array $graph
     * @return string|null
     */
    public function handle(array $graph): ?string
    {
        $searchQueue = new \SplQueue();
        $searchQueue->push(current(array_keys($graph)));
        $searched = [];
        while (!$searchQueue->isEmpty()) {
            $name = $searchQueue->pop();

            if (in_array($name, $searched)) {
                continue;
            }

            if ($this->isNeedPerson($name)){
                return $name;
            } else {
                foreach ($graph[$name] as $value) {
                    $searchQueue->push($value);
                }
                $searched[] = $name;
            }
        }

        return false;
    }

    protected function isNeedPerson(string $name): bool
    {
        return strlen($name) == 7;
    }
}
