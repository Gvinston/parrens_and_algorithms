<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Structure\Composite\Component;
use App\Services\Patterns\Structure\Composite\Composite;
use App\Services\Patterns\Structure\Composite\Leaf;


class CompositeController extends Controller
{
    public function get()
    {
        /**
         * Таким образом, клиентский код может поддерживать простые компоненты-листья...
         */
        $simple = new Leaf();
        echo "Client: I've got a simple component:<br>";
        $this->clientCode($simple);
        echo "<br><br>";

        /**
         * ...а также сложные контейнеры.
         */
        $tree = new Composite();
        $branch1 = new Composite();
        $branch1->add(new Leaf());
        $branch1->add(new Leaf());
        $branch2 = new Composite();
        $branch2->add(new Leaf());
        $tree->add($branch1);
        $tree->add($branch2);
        echo "Client: Now I've got a composite tree:<br>";
        $this->clientCode($tree);
        echo "<br><br>";

        echo "Client: I don't need to check the components classes even when managing the tree:\n";
        $this->clientCode2($tree, $simple);
    }

    /**
     * Клиентский код работает со всеми компонентами через базовый интерфейс.
     */
    public function clientCode(Component $component)
    {
        // ...

        echo "RESULT: " . $component->operation();

        // ...
    }

    /**
     * Благодаря тому, что операции управления потомками объявлены в базовом классе
     * Компонента, клиентский код может работать как с простыми, так и со сложными
     * компонентами, вне зависимости от их конкретных классов.
     */
    public function clientCode2(Component $component1, Component $component2)
    {
        // ...

        if ($component1->isComposite()) {
            $component1->add($component2);
        }
        echo "RESULT: " . $component1->operation();

        // ...
    }

}
