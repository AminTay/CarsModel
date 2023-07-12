<?php

namespace app\Car\Peugeot;


use app\Car\BaseCar;

class LandCruiser extends BaseCar
{
    public const  BASE_FUEL_CONSUMPTION = 12;

    public function __construct(int $posX, int $posY)
    {
        parent::__construct($posX, $posY, self::BASE_FUEL_CONSUMPTION);
    }
}