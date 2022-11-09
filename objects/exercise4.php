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
    public function getRating(): string
    {
        return $this->rating;
    }
    public function getPG(array $movies): array
    {
        $filtereMovies = [];
        foreach ($movies as $movie) {
            if ($movie->getRating() === 'PG') {
                $filtereMovies[] = $movie;
            }
        }
        return $filtereMovies;
    }
}