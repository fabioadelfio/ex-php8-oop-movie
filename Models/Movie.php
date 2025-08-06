<?php

require_once 'Models/Genre.php';
require_once 'Traits/HasPoster.php';

class Movie
{
    use HasPoster;

    public $title;
    public $year;
    public Genre $genre;
    public $rating;

    public function __construct($title, $year, Genre $genre, $rating, $poster)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->rating = $rating;
        $this->poster = $poster;
    }

    public function getGenres(): string
    {
        return implode(', ', array_map(fn($genre) => $genre->name, $this->genres));
    }

    public function getMovieInfo(): string
    {
        return "<strong>{$this->title}</strong> ({$this->year})<br>" .
            "Genere: " . $this->getGenres() . "<br>" .
            "Rating: {$this->rating}/10<br>";
    }
}
