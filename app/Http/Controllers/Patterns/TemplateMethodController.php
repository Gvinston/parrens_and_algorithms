<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Behavioral\TemplateMethod\AbstractClass;
use App\Services\Patterns\Behavioral\TemplateMethod\ConcreteClass1;
use App\Services\Patterns\Behavioral\TemplateMethod\ConcreteClass2;


class TemplateMethodController extends Controller
{
    public function get()
    {
        echo "Same client code can work with different subclasses:<br>";
        $this->clientCode(new ConcreteClass1());
        echo "<br>";

        echo "Same client code can work with different subclasses:<br>";
        $this->clientCode(new ConcreteClass2());
    }

    /**
     * Клиентский код вызывает шаблонный метод для выполнения алгоритма. Клиентский
     * код не должен знать конкретный класс объекта, с которым работает, при
     * условии, что он работает с объектами через интерфейс их базового класса.
     */
    public function clientCode(AbstractClass $class)
    {
        // ...
        $class->templateMethod();
        // ...
    }
}
