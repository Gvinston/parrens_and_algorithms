<?php

namespace App\Services\Patterns\Structure\Adapter;

/**
 * Целевой класс объявляет интерфейс, с которым может работать клиентский код.
 */
class Target
{
    public function request(): string
    {
        return "Target: The default target's behavior.";
    }
}
