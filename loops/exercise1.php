<?php

for ($i = 0; $i < 20; $i++){
    $naturalNumbers[] = $i;
}
echo "The first 10 natural numbers are: " . PHP_EOL;
for ($i = 1; $i <= 10; $i++){
    echo $naturalNumbers[$i] . " ";
}

