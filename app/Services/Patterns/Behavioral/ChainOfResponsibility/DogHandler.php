<?php

namespace App\Services\Patterns\Behavioral\ChainOfResponsibility;

class DogHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "MeatBall") {
            return "Dog: I'll eat the " . $request . ".<br>";
        } else {
            return parent::handle($request);
        }
    }
}
