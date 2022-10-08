<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Structure\Decorator\Component;
use App\Services\Patterns\Structure\Decorator\ConcreteComponent;
use App\Services\Patterns\Structure\Decorator\ConcreteDecoratorA;
use App\Services\Patterns\Structure\Decorator\ConcreteDecoratorB;


class DecoratorController extends Controller
{
    public function get()
    {
        /**
         * Таким образом, клиентский код может поддерживать как простые компоненты...
         */
        $simple = new ConcreteComponent();
        echo "Client: I've got a simple component:<br>";
        $this->clientCode($simple);
        echo "<br><br>";

        /**
         * ...так и декорированные.
         *
         * Обратите внимание, что декораторы могут обёртывать не только простые
         * компоненты, но и другие декораторы.
         */
        $decorator1 = new ConcreteDecoratorA($simple);
        $decorator2 = new ConcreteDecoratorB($decorator1);
        echo "Client: Now I've got a decorated component:<br>";
        $this->clientCode($decorator2);
    }

    /**
     * Клиентский код работает со всеми объектами, используя интерфейс Компонента.
     * Таким образом, он остаётся независимым от конкретных классов компонентов, с
     * которыми работает.
     */
    public function clientCode(Component $component)
    {
        // ...

        echo "RESULT: " . $component->operation();

        // ...
    }
}
