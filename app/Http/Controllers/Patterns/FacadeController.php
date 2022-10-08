<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Structure\Facade\Facade;
use App\Services\Patterns\Structure\Facade\Subsystem1;
use App\Services\Patterns\Structure\Facade\Subsystem2;


class FacadeController extends Controller
{
    public function get()
    {
        $subsystem1 = new Subsystem1();
        $subsystem2 = new Subsystem2();
        $facade = new Facade($subsystem1, $subsystem2);
        echo $facade->operation();
    }
}
