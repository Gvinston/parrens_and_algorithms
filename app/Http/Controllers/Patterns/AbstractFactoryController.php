<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Generating\AbstractFactory\AbstractFactory;
use App\Services\Patterns\Generating\AbstractFactory\ConcreteFactory1;
use App\Services\Patterns\Generating\AbstractFactory\ConcreteFactory2;


class AbstractFactoryController extends Controller
{
    public function get()
    {
        /**
         * Клиентский код может работать с любым конкретным классом фабрики.
         */
        echo "Client: Testing client code with the first factory type:</br></br>";
        $this->clientCode(new ConcreteFactory1());

        echo "\n";

        echo "Client: Testing the same client code with the second factory type:</br></br>";
        $this->clientCode(new ConcreteFactory2());
    }

    function clientCode(AbstractFactory $factory)
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();

        echo $productB->usefulFunctionB() . "</br></br>";
        echo $productB->anotherUsefulFunctionB($productA) . "</br></br>";
    }
}
