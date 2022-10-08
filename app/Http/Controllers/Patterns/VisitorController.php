<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Behavioral\Visitor\ConcreteComponentA;
use App\Services\Patterns\Behavioral\Visitor\ConcreteComponentB;
use App\Services\Patterns\Behavioral\Visitor\ConcreteVisitor1;
use App\Services\Patterns\Behavioral\Visitor\ConcreteVisitor2;
use App\Services\Patterns\Behavioral\Visitor\Visitor;


class VisitorController extends Controller
{
    public function get()
    {
        $components = [
            new ConcreteComponentA(),
            new ConcreteComponentB(),
        ];

        echo "The client code works with all visitors via the base Visitor interface:<br>";
        $visitor1 = new ConcreteVisitor1();
        $this->clientCode($components, $visitor1);
        echo "<br>";

        echo "It allows the same client code to work with different types of visitors:<br>";
        $visitor2 = new ConcreteVisitor2();
        $this->clientCode($components, $visitor2);
    }

    /**
     * Клиентский код может выполнять операции посетителя над любым набором
     * элементов, не выясняя их конкретных классов. Операция принятия направляет
     * вызов к соответствующей операции в объекте посетителя.
     */
    public function clientCode(array $components, Visitor $visitor)
    {
        // ...
        foreach ($components as $component) {
            $component->accept($visitor);
        }
        // ...
    }
}
