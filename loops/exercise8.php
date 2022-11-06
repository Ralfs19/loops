<?php

class NumberSquare{
    public static function printSquare(int $min, int $max){
        for ($i = $min; $i <= $max; $i++){
            for ($j = $i; $j <= $max; $j++){
                echo $j;
            }
            for ($k = 0; $k < $i - $min; $k++){
                echo $min + $k;

            }
            echo ' ' . PHP_EOL;
        }
    }
}
NumberSquare::printSquare(readline('Min? '), readline('Max? '));