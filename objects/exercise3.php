<?php

require_once 'Car.php';
require_once 'Odometer.php';
require_once 'FuelGauge.php';

$car = new Car(new FuelGauge(10), new Odometer());




while ($car->getFuelGauge()->getAmount() > 0)
{
    echo "We drove 1km". PHP_EOL;
    $car->drive();
    echo "FuelGauge: {$car->getFuelGauge()->getAmount()} / Odometer: {$car->getOdometer()->getMileage()}" . PHP_EOL;

    sleep(1);
}