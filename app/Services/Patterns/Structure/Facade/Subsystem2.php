<?php

namespace App\Services\Patterns\Structure\Facade;

/**
 * Некоторые фасады могут работать с разными подсистемами одновременно.
 */
class Subsystem2
{
    public function operation1(): string
    {
        return "Subsystem2: Get ready!\n";
    }

    // ...

    public function operationZ(): string
    {
        return "Subsystem2: Fire!\n";
    }
}
