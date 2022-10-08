<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Behavioral\Memento\Caretaker;
use App\Services\Patterns\Behavioral\Memento\Originator;


class MementoController extends Controller
{
    public function get()
    {
        /**
         * Клиентский код.
         */
        $originator = new Originator("Super-duper-super-puper-super.");
        $caretaker = new Caretaker($originator);

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        echo "<br>";
        $caretaker->showHistory();

        echo "<br>Client: Now, let's rollback!<br><br>";
        $caretaker->undo();

        echo "<br>Client: Once more!<br><br>";
        $caretaker->undo();

        echo "<br>Client: Once more!<br><br>";
        $caretaker->undo();
    }
}
