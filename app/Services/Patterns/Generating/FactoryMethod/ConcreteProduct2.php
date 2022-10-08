<?php

namespace App\Services\Patterns\Generating\FactoryMethod;

class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}
