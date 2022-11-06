<?php

class Product{
    public $name;
    public $startPrice;
    public $amount;
    public function __construct(string $name, float $startPrice, int $amount){
    $this->name = $name;
    $this->startPrice = $startPrice;
    $this->amount = $amount;
    }
}

function printProducts($object)
{
    $fruits = new Product('Banana', 1.2, 20);
    echo $object->name . ', price ' . $object->startPrice . ', ' . $object->amount . ' units';
}
function changeAmount($object, $amount){
    $object->amount = $amount;
}
function changePrice($object, $price){
    $object->startPrice = $price;
}

$device1 = new Product('Logitech mouse', 70.00, 14);
$device2 = new Product('iPhone 5s', 999.99, 3);
$device3 = new Product('Epson EB-UO5', 440.46, 1);



echo "To change amount [1] for {$device1->name} {$device1->startPrice} EURO {$device1->amount} amount " . PHP_EOL;
echo "To change price [2] for {$device1->name} {$device1->startPrice} EURO {$device1->amount} amount " . PHP_EOL;
echo "To change amount [3] for {$device2->name} {$device2->startPrice} EURO {$device2->amount} amount " . PHP_EOL;
echo "To change price [4] for {$device2->name} {$device2->startPrice} EURO {$device2->amount} amount " . PHP_EOL;
echo "To change amount [5] for {$device3->name} {$device3->startPrice} EURO {$device3->amount} amount " . PHP_EOL;
echo "To change price [6] for {$device3->name} {$device3->startPrice} EURO {$device3->amount} amount " . PHP_EOL;
echo 'To exit [7]' . PHP_EOL;
while (true){
    $input = readline();
    if ($input == 1){
        $a = $device1;
        changeAmount($a, readline('Enter new amount: '));
        printProducts($a);
        echo PHP_EOL;
    }
    if ($input == 2){
        $a = $device1;
        changePrice($a, readline('Enter new price: '));
        printProducts($a);
        echo PHP_EOL;
    }
    if ($input == 3){
        $a = $device2;
        changeAmount($a, readline('Enter new amount: '));
        printProducts($a);
        echo PHP_EOL;
    }
    if ($input == 4){
        $a = $device2;
        changePrice($a, readline('Enter new price: '));
        printProducts($a);
        echo PHP_EOL;
    }
    if ($input == 5){
        $a = $device3;
        changeAmount($a, readline('Enter new amount: '));
        printProducts($a);
        echo PHP_EOL;
    }
    if ($input == 6){
        $a = $device3;
        changePrice($a, readline('Enter new price: '));
        printProducts($a);
        echo PHP_EOL;
    }
    if ($input == 7){
        break;
    }




}

