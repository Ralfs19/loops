<?php


class Video
{
    private string $title;
    private bool $checked;
    private int $rating;

    public function __construct(string $title, bool $checked, int $rating)
    {

        $this->title = $title;
        $this->checked = $checked;
        $this->rating = $rating;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function check(): bool
    {
        return $this->checked;
    }
    public function getRating(): int
    {
        return $this->rating;
    }
    public function addRaiting(int $addRaiting)
    {
        $this->rating += $addRaiting;
    }
    public function

}

$vv = new Video('New vid', false, 5);
var_dump($vv->check());