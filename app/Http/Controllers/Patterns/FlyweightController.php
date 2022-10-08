<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Services\Patterns\Structure\Flyweight\FlyweightFactory;


class FlyweightController extends Controller
{
    public function get()
    {
        /**
         * Клиентский код обычно создает кучу предварительно заполненных легковесов на
         * этапе инициализации приложения.
         */
        $factory = new FlyweightFactory([
            ["Chevrolet", "Camaro2018", "pink"],
            ["Mercedes Benz", "C300", "black"],
            ["Mercedes Benz", "C500", "red"],
            ["BMW", "M5", "red"],
            ["BMW", "X6", "white"],
            // ...
        ]);
        $factory->listFlyweights();

        $this->addCarToPoliceDatabase($factory,
            "CL234IR",
            "James Dor",
            "BMW",
            "M5",
            "red",
        );

        $this->addCarToPoliceDatabase($factory,
            "CL234IR",
            "James Doe",
            "BMW",
            "X1",
            "red",
        );

        $factory->listFlyweights();
    }

    public function addCarToPoliceDatabase(
        FlyweightFactory $ff, $plates, $owner,
                         $brand, $model, $color
    )
    {
        echo "<br>Client: Adding a car to database.<br><br>";
        $flyweight = $ff->getFlyweight([$brand, $model, $color]);

        // Клиентский код либо сохраняет, либо вычисляет внешнее состояние и
        // передает его методам легковеса.
        $flyweight->operation([$plates, $owner]);
    }
}
