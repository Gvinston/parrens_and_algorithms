<?php

namespace App\Services\Patterns\Behavioral\Memento;

/**
 * Интерфейс Снимка предоставляет способ извлечения метаданных снимка, таких как
 * дата создания или название. Однако он не раскрывает состояние Создателя.
 */
interface Memento
{
    public function getName(): string;

    public function getDate(): string;
}
