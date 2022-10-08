<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Structure\Adapter\Adaptee;
use App\Services\Patterns\Structure\Adapter\Adapter;
use App\Services\Patterns\Structure\Adapter\Target;


class AdapterController extends Controller
{
    public function get()
    {
        echo "Client: I can work just fine with the Target objects:</br>";
        $target = new Target();
        $this->clientCode($target);
        echo "</br></br>";

        $adaptee = new Adaptee();
        echo "Client: The Adaptee class has a weird interface. See, I don't understand it:</br>";
        echo "Adaptee: " . $adaptee->specificRequest();
        echo "</br></br>";

        echo "Client: But I can work with it via the Adapter:</br>";
        $adapter = new Adapter($adaptee);
        $this->clientCode($adapter);
    }

    /**
     * Клиентский код поддерживает все классы, использующие целевой интерфейс.
     */
    function clientCode(Target $target)
    {
        echo $target->request();
    }
}
