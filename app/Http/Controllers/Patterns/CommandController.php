<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Behavioral\Command\ComplexCommand;
use App\Services\Patterns\Behavioral\Command\Invoker;
use App\Services\Patterns\Behavioral\Command\Receiver;
use App\Services\Patterns\Behavioral\Command\SimpleCommand;


class CommandController extends Controller
{
    public function get()
    {
        /**
         * Клиентский код может параметризовать отправителя любыми командами.
         */
        $invoker = new Invoker();
        $invoker->setOnStart(new SimpleCommand("Say Hi!"));
        $receiver = new Receiver();
        $invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

        $invoker->doSomethingImportant();
    }
}
