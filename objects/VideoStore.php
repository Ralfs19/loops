<?php

class VideoStore
{
private Video $video;

public function __construct(Video $video)
{
    $this->video = $video;
}
public function inventory(string $title)
{
    $this->video->addVideo($title);
}

}