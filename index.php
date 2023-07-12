<?php

namespace app;

use app\Car\Mercedes\CLS500;
use app\Car\Peugeot\A206;
use app\Car\Peugeot\LandCruiser;

require_once __DIR__ . '/vendor/autoload.php';

$car1 = new CLS500(0, 0);
$car1->getFuel();
$car1->goUp();

$car1->goLeft();
$car1->goLeft();

$car1->getPosition();

$car1->setSpeed(3);

$car1->goRight();
$car1->getDestination();

$car1->getFuel();

$car1->setSpeed(10);

$car1->goUp();
$car1->increaseFuel(200);

$car1->getDistance();
$car1->getPosition();

$car1->goUp();
$car1->goRight();

$car1->getPosition();
$car1->getFuel();

$car1->setSpeed(4);

$car1->goUp();

$car1->increaseFuel(100);

$car1->goRight();

$car1->getPosition();
$car1->getDistance();

$car1->setSpeed(1);
$car1->goDown();
$car1->getPosition();

unset($car1);


