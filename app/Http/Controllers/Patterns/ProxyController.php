<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Structure\Proxy\Proxy;
use App\Services\Patterns\Structure\Proxy\RealSubject;
use App\Services\Patterns\Structure\Proxy\Subject;


class ProxyController extends Controller
{
    public function get()
    {
        echo "Client: Executing the client code with a real subject:<br>";
        $realSubject = new RealSubject();
        $this->clientCode($realSubject);

        echo "<br>";

        echo "Client: Executing the same client code with a proxy:<br>";
        $proxy = new Proxy($realSubject);
        $this->clientCode($proxy);
    }

    /**
     * Клиентский код работает со всеми объектами, используя интерфейс Компонента.
     * Таким образом, он остаётся независимым от конкретных классов компонентов, с
     * которыми работает.
     */
    public function clientCode(Subject $subject)
    {
        // ...

        $subject->request();

        // ...
    }
}
