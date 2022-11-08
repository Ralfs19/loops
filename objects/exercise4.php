<?php

class Movie
{
    private string $title;
    private string $studio;
    private string $rating;
    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }
    public function getPG():array
    {
        $newMovie = [$this->title, $this->studio, $this->rating];
        $movies = [];

        if (in_array('PG', $newMovie)){
            $movies = [$this->title, $this->studio, $this->rating];
        }
        return $movies;
    }

}
$e = new Movie("A", "Z", "PG");
$movie1 = new Movie("Casino Royale", "Eon Productions", "PG-13");
$movie2 = new Movie("Glass", "Buena Vista International", "PG-13");
$movie2 = new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG");
var_dump($movie2->getPG());