<?php

require_once "./Traits/Rateable.php";
require_once "./Models/Movie.php";
require_once "./Models/Genre.php";


$crime = new Genre("Crime");
$scifi = new Genre("Sci-fi");
$thriller = new Genre("Thriller");
$action = new Genre("Action");
$drama = new Genre("Drama");

$movies = [
    $m1 = new Movie("Il Padrino", "Francis Ford Coppola", 1972, [$crime, $drama, $thriller]),
    $m2 = new Movie("Matrix", "Wachowski", 1999, [$scifi, $action]),
    $m3 = new Movie("Inception", "Christopher Nolan", 2010, [$scifi, $thriller]),
    $m4 = new Movie("Parasite", "Bong Joon-ho", 2019, [$thriller, $drama]),
    $m5 = new Movie("Pulp Fiction", "Quentin Tarantino", 1994, [$crime, $drama, $thriller]),
    $m6 = new Movie("Gangs of New York", "Martin Scorzese", 2002, [$crime, $drama, $thriller]),
];

$m1->setRating(10);
$m3->setRating(8);
$m4->setRating(9);
