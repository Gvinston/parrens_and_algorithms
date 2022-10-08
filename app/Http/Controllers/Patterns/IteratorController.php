<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Behavioral\Iterator\WordsCollection;


class IteratorController extends Controller
{
    public function get()
    {
        /**
         * Клиентский код может знать или не знать о Конкретном Итераторе или классах
         * Коллекций, в зависимости от уровня косвенности, который вы хотите сохранить в
         * своей программе.
         */
        $collection = new WordsCollection();
        $collection->addItem("First");
        $collection->addItem("Second");
        $collection->addItem("Third");

        echo "Straight traversal:<br>";
        foreach ($collection->getIterator() as $item) {
            echo $item . "<br>";
        }

        echo "<br>";
        echo "Reverse traversal:<br>";
        foreach ($collection->getReverseIterator() as $item) {
            echo $item . "<br>";
        }
    }
}
