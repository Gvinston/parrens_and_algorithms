<?php

namespace App\Services\Patterns\Structure\Decorator;

/**
 * Базовый интерфейс Компонента определяет поведение, которое изменяется
 * декораторами.
 */
interface Component
{
    public function operation(): string;
}

