<?php

require_once 'exercise4.php';

$movies = [
    new Movie('j', 'b', 'PG13'),
    new Movie('l', 'h', 'PG13'),
    new Movie('m', 'n', 'PG'),
];

$pgMovies = $movies[0];

var_dump($pgMovies->getPG($movies));