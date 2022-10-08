<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Behavioral\Mediator\Component1;
use App\Services\Patterns\Behavioral\Mediator\Component2;
use App\Services\Patterns\Behavioral\Mediator\ConcreteMediator;


class MediatorController extends Controller
{
    public function get()
    {
        /**
         * Клиентский код.
         */
        $c1 = new Component1();
        $c2 = new Component2();
        $mediator = new ConcreteMediator($c1, $c2);

        echo "Client triggers operation A.<br>";
        $c1->doA();

        echo "<br>";
        echo "Client triggers operation D.<br>";
        $c2->doD();
    }
}
