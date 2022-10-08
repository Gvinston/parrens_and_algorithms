<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Generating\FactoryMethod\ConcreteCreator1;
use App\Services\Patterns\Generating\FactoryMethod\ConcreteCreator2;
use App\Services\Patterns\Generating\FactoryMethod\Creator;


class FactoryMethodController extends Controller
{
    public function get()
    {
        echo "App: Launched with the ConcreteCreator1.</br></br>";
        $this->clientCode(new ConcreteCreator1());
        echo "</br></br>";

        echo "App: Launched with the ConcreteCreator2.</br></br>";
        $this->clientCode(new ConcreteCreator2());
    }

    public function clientCode(Creator $creator)
    {
        // ...
        echo "Client: I'm not aware of the creator's class, but it still works.</br></br>"
            . $creator->someOperation();
        // ...
    }
}
