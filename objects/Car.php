<?php

class Car
{
    private FuelGauge $fuelGauge;
    private Odometer $odometer;
    public function __construct(FuelGauge $fuelGauge, Odometer $odometer)
    {
        $this->fuelGauge = $fuelGauge;
        $this->odometer = $odometer;
    }
    public function drive():void
    {
        $this->odometer->increment(1);
        if ($this->odometer->getMileage() % 10 === 0)
        {
            $this->fuelGauge->use(1);
        }
    }
    public function getFuelGauge(): FuelGauge
    {
        return $this->fuelGauge;
    }
    public function getOdometer(): Odometer
    {
        return $this->odometer;
    }
}