<?php

class Date
{
    private int $month;
    private int $day;
    private int $year;
    public function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
        if ($this->month > 12){
            $this->month = 1;
        }
        if ($this->day < 0){
            $this->day = 1;
        }
        if ($this->month == 12 && $this->day > 31){
            $this->day = 1;
            $this->year++;
        }
        if ($this->month == 11 && $this->day > 30){
            $this->day = 1;
            $this->month = 12;
        }
        if ($this->month == 10 && $this->day > 31){
            $this->day = 1;
            $this->month = 11;
        }
        if ($this->month == 9 && $this->day > 30){
            $this->day = 1;
            $this->month = 10;
        }
        if ($this->month == 8 && $this->day > 31){
            $this->day = 1;
            $this->month = 9;
        }
        if ($this->month == 7 && $this->day > 31){
            $this->day = 1;
            $this->month = 8;
        }
        if ($this->month == 6 && $this->day > 30){
            $this->day = 1;
            $this->month = 7;
        }
        if ($this->month == 5 && $this->day > 31){
            $this->day = 1;
            $this->month = 6;
        }
        if ($this->month == 4 && $this->day > 30){
            $this->day = 1;
            $this->month = 5;
        }
        if ($this->month == 3 && $this->day > 31){
            $this->day = 1;
            $this->month = 4;
        }
        if ($this->month == 2 && $this->day > 28){
            $this->day = 1;
            $this->month = 3;
        }
        if ($this->month == 1 && $this->day > 31){
            $this->day = 1;
            $this->month = 2;
        }
    }
    public function getMonth(): int
    {
        return $this->month;
    }
    public function getDay(): int
    {
        return $this->day;
    }
    public function getYear(): int
    {
        return $this->year;
    }
    public function setDay($newDay)
    {
        $this->day = $newDay;
    }
    public function setMonth($newMonth)
    {
        $this->month = $newMonth;
    }
    public function setYear($newYear)
    {
        $this->year = $newYear;
    }
    public function printDate()
    {
        echo "{$this->month} / {$this->day} / {$this->year}" . PHP_EOL;
    }
}
$dateTest = new Date(11, 8, 2022);
$dateTest->setDay(25);
$dateTest->setMonth(10);
$dateTest->setYear(2023);
$dateTest->printDate();
