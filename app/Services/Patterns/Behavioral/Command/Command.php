<?php

namespace App\Services\Patterns\Behavioral\Command;

/**
 * Интерфейс Команды объявляет метод для выполнения команд.
 */
interface Command
{
    public function execute(): void;
}
