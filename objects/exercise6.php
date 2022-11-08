<?php

class Energy
{
private $surveyed = 12467;
private $purchased_energy_drinks = 0.14;
private $prefer_citrus_drinks = 0.64;
    public function calculate_energy_drinkers(): int
    {
        return $this->surveyed * $this->purchased_energy_drinks;
    }
    public function calculate_prefer_citrus(): int
    {
        return $this->calculate_energy_drinkers() * $this->prefer_citrus_drinks;
    }
    public function printCountSurveyed(): int
    {
        return $this->surveyed;
    }
}

$energy = new Energy();
echo PHP_EOL;
echo "Total number of people surveyed: {$energy->printCountSurveyed()}" . PHP_EOL;
echo "Approximately {$energy->calculate_energy_drinkers()} bought at least one energy drink" . PHP_EOL;
echo "{$energy->calculate_prefer_citrus()} of those prefer citrus flavored energy drinks." . PHP_EOL;