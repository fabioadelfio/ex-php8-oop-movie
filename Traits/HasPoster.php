<?php
trait HasPoster
{
    public string $poster;

    public function getPosterTag(): string
    {
        return "<img src='{$this->poster}' alt='Poster'>";
    }
}
