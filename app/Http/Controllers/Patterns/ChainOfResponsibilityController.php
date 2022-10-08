<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Behavioral\ChainOfResponsibility\DogHandler;
use App\Services\Patterns\Behavioral\ChainOfResponsibility\Handler;
use App\Services\Patterns\Behavioral\ChainOfResponsibility\MonkeyHandler;
use App\Services\Patterns\Behavioral\ChainOfResponsibility\SquirrelHandler;


class ChainOfResponsibilityController extends Controller
{
    public function get()
    {
        /**
         * Другая часть клиентского кода создает саму цепочку.
         */
        $monkey = new MonkeyHandler();
        $squirrel = new SquirrelHandler();
        $dog = new DogHandler();

        $monkey->setNext($squirrel)->setNext($dog);

        /**
         * Клиент должен иметь возможность отправлять запрос любому обработчику, а не
         * только первому в цепочке.
         */
        echo "Chain: Monkey > Squirrel > Dog<br><br>";
        $this->clientCode($monkey);
        echo "<br>";

        echo "Subchain: Squirrel > Dog<br><br>";
        $this->clientCode($squirrel);
    }

    /**
     * Обычно клиентский код приспособлен для работы с единственным обработчиком. В
     * большинстве случаев клиенту даже неизвестно, что этот обработчик является
     * частью цепочки.
     */
    public function clientCode(Handler $handler)
    {
        foreach (["Nut", "Banana", "Cup of coffee"] as $food) {
            echo "Client: Who wants a " . $food . "?<br>";
            $result = $handler->handle($food);
            if ($result) {
                echo "  " . $result;
            } else {
                echo "  " . $food . " was left untouched.<br>";
            }
        }
    }
}
