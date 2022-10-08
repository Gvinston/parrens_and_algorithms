<?php

namespace App\Http\Controllers\Patterns;


use App\Http\Controllers\Controller;
use App\Services\Patterns\Behavioral\Observer\ConcreteObserverA;
use App\Services\Patterns\Behavioral\Observer\ConcreteObserverB;
use App\Services\Patterns\Behavioral\Observer\Subject;

class ObserverController extends Controller
{
    public function get()
    {
        /**
         * Клиентский код.
         */

        $subject = new Subject();

        $o1 = new ConcreteObserverA();
        $subject->attach($o1);

        $o2 = new ConcreteObserverB();
        $subject->attach($o2);

        $subject->someBusinessLogic();
        $subject->someBusinessLogic();

        $subject->detach($o2);

        $subject->someBusinessLogic();
    }
}
