<?php

 class AsciiFigure{
    public static function draw(int $number){
        echo PHP_EOL;
        for ($i = 1; $i <= $number; $i++){

            for ($j = 1; $j <= 20 - 4 * $i; $j++){
                echo "/" ;
            }

            for ($o = 1; $o <= 8 * $i - 8; $o++){
                echo "*";
            }

            for ($o = 1; $o <= 20 - 4 * $i; $o++){
                echo "\\";
            }
            echo '' . PHP_EOL;
        }
    }

}
AsciiFigure::draw(3);