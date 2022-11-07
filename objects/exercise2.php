<?php
class Point{
    public int $x;
    public int $y;

    public function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;

    }
    public function swap($firs, $sec){
        $firs->x = $firs->x + $sec->x;
        $sec->x = $firs->x - $sec->x;
        $firs->x = $firs->x - $sec->x;
        $firs->y = $firs->y + $sec->y;
        $sec->y = $firs->y - $sec->y;
        $firs->y = $firs->y - $sec->y;
    }
}

$teg = new Point(5, 2);
$tag = new Point(-3, 6);

$teg->swap($teg, $tag);

echo "(" . $teg->x . ", " . $teg->y . ")" . PHP_EOL;
echo "(" . $tag->x . ", " . $tag->y . ")" . PHP_EOL;