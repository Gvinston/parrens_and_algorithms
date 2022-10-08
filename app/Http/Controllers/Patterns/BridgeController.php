<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Structure\Bridge\Abstraction;
use App\Services\Patterns\Structure\Bridge\ConcreteImplementationA;
use App\Services\Patterns\Structure\Bridge\ConcreteImplementationB;
use App\Services\Patterns\Structure\Bridge\ExtendedAbstraction;


class BridgeController extends Controller
{
    public function get()
    {
        /**
         * Клиентский код должен работать с любой предварительно сконфигурированной
         * комбинацией абстракции и реализации.
         */
        $implementation = new ConcreteImplementationA();
        $abstraction = new Abstraction($implementation);
        $this->clientCode($abstraction);

        echo "<br/><br/>";

        $implementation = new ConcreteImplementationB();
        $abstraction = new ExtendedAbstraction($implementation);
        $this->clientCode($abstraction);
    }

    public function clientCode(Abstraction $abstraction)
    {
        // ...

        echo $abstraction->operation();

        // ...
    }
}
