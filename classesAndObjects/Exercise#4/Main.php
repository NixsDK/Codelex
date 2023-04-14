<?php
require_once('Movie.php');

$movie1 = new Movie("Casino Royale", "Eon Productions", "PG-13");
$movie2 = new Movie("Glass", "Buena Vista International", "PG-13");
$movie3 = new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG");

$movies = [$movie1, $movie2, $movie3];

$pg_movies = Movie::getPG($movies);

foreach ($pg_movies as $movie) {
    echo $movie->title . " - " . $movie->studio . " - " . $movie->rating . "\n";
}
