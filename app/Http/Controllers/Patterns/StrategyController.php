<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Behavioral\Strategy\ConcreteStrategyA;
use App\Services\Patterns\Behavioral\Strategy\ConcreteStrategyB;
use App\Services\Patterns\Behavioral\Strategy\Context;


class StrategyController extends Controller
{
    public function get()
    {
        /**
         * Клиентский код выбирает конкретную стратегию и передаёт её в контекст. Клиент
         * должен знать о различиях между стратегиями, чтобы сделать правильный выбор.
         */
        $context = new Context(new ConcreteStrategyA());
        echo "Client: Strategy is set to normal sorting.<br>";
        $context->doSomeBusinessLogic();

        echo "<br>";

        echo "Client: Strategy is set to reverse sorting.<br>";
        $context->setStrategy(new ConcreteStrategyB());
        $context->doSomeBusinessLogic();
    }
}
