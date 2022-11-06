<?php

class Piglet{
    public $dice = 0;

    public function startDice(){
        $this->dice = rand(1, 6);
    }
}
$pig = new Piglet();

while (true) {
    $pig->startDice();
    $result[] = $pig->dice;
    $together = 0;
    echo 'Welcome to Piglet!' . PHP_EOL;
    echo 'You rolled '. $pig->dice . PHP_EOL;
    $input1 = readline('Rolle again? y/n: ');
    if ($input1 == 'y') {
        echo 'You rolled '. $pig->dice . PHP_EOL;
    }
    for ($i = 0; $i < count($result); $i++){
        $together += $result[$i];
    }
    if ($pig->dice == 1){
        echo 'You lose..' . PHP_EOL;
        break;
    }
    if ($input1 == 'n') {
        echo 'Result is: ' . $together . PHP_EOL;
        break;
    }

}
