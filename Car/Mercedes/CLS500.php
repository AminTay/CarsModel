<?php

namespace app\Car\Mercedes;

use app\Car\BaseCar;

class CLS500 extends BaseCar
{
    public const  BASE_FUEL_CONSUMPTION = 10;

    public function __construct(int $posX, int $posY)
    {
        parent::__construct($posX, $posY, self::BASE_FUEL_CONSUMPTION);
    }
}