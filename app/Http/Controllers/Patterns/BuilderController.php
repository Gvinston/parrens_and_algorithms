<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;


class BuilderController extends Controller
{
    public function get()
    {
        $director = new \App\Services\Patterns\Generating\Builder\Director();
        $builder = new \App\Services\Patterns\Generating\Builder\ConcreteBuilder1();
        $director->setBuilder($builder);

        echo "Standard basic product:" . "</br>";
        $director->buildMinimalViableProduct();
        $builder->getProduct()->listParts();

        echo "</br></br>Standard full featured product:</br>";
        $director->buildFullFeaturedProduct();
        $builder->getProduct()->listParts();

        // Помните, что паттерн Строитель можно использовать без класса Директор.
        echo "</br></br>Custom product:</br>";
        $builder->producePartA();
        $builder->producePartC();
        $builder->getProduct()->listParts();
    }
}
