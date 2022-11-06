<?php

class RollTwoDice{
    public $dice = 0;

    public function startDice(){
        $this->dice = rand(1, 6);
    }
}
$roll1 = new RollTwoDice();
$roll2 = new RollTwoDice();

    $together = 0;
    $desiredSum = rand(6, 12);
echo 'Enter to rolle' . PHP_EOL;
echo 'Desire sum: ' . $desiredSum;
while (true) {
    $roll1->startDice();
    $roll2->startDice();
    $result[] = $roll1->dice;
    $result1[] = $roll2->dice;
    $input = readline();
    foreach ($result as $key){
        foreach ($result1 as $key1){
            $together = $key + $key1;
        }
    }
    echo $roll1->dice . ' and ' . $roll2->dice . ' = ' . $together;
    if ($together == $desiredSum){
        break;
    }
}



