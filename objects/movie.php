<?php

require_once 'exercise4.php';

$movies = [
    new Movie('Casino Royale', 'Eon Productions', 'PG13'),
    new Movie('Glass', 'Buena Vista International', 'PG13'),
    new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG'),
];

$pgMovies = $movies[0];

var_dump($pgMovies->getPG($movies));