<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Behavioral\State\ConcreteStateA;
use App\Services\Patterns\Behavioral\State\Context;


class StateController extends Controller
{
    public function get()
    {
        /**
         * Клиентский код.
         */
        $context = new Context(new ConcreteStateA());
        $context->request1();
        $context->request2();
    }
}
