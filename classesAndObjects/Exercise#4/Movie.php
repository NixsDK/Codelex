<?php

class Movie
{
    public $title;
    public $studio;
    public $rating;

    public function __construct($title, $studio, $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public static function getPG($movies)
    {
        $pg_movies = [];
        foreach ($movies as $movie) {
            if ($movie->rating == "PG") {
                $pg_movies[] = $movie;
            }
        }
        return $pg_movies;
    }
}
