<?php

require_once 'Models/Genre.php';
require_once 'Traits/HasPoster.php';

class Movie
{
    use HasPoster;

    public $title;
    public $year;
    public array $genres;
    public $rating;

    public function __construct($title, $year, $genres, $rating, $poster)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genres = $genres;
        $this->rating = $rating;
        $this->poster = $poster;
    }

    public function getGenres(): string
    {
        $names = [];

        foreach ($this->genres as $genre) {
            $names[] = $genre->name;
        }

        return implode(', ', $names);
    }

    public function getMovieInfo(): string
    {
        return "<strong>{$this->title}</strong> ({$this->year})<br>" .
            "Genere: " . $this->getGenres() . "<br>" .
            "Rating: {$this->rating}/10<br>";
    }
}
