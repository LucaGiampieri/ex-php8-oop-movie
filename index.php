<?php

require_once "./Models/Movie.php";
require_once "./Models/Genre.php";

$crime = new Genre("Crime");
$scifi = new Genre("Sci-fi");
$thriller = new Genre("Thriller");
$action = new Genre("Action");
$drama = new Genre("Drama");

$movies = [
    new Movie("Il Padrino", "Francis Ford Coppola", 1972, [$crime, $drama, $thriller]),
    new Movie("Matrix", "Wachowski", 1999, [$scifi, $action]),
    new Movie("Inception", "Christopher Nolan", 2010, [$scifi, $thriller]),
    new Movie("Parasite", "Bong Joon-ho", 2019, [$thriller, $drama]),
    new Movie("Pulp Fiction", "Quentin Tarantino", 1994, [$crime, $drama, $thriller]),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php8-oop-movie</title>
</head>
<body>

<ul>
<?php
foreach ($movies as $movie) {
    echo "<hr>";
    echo "<li>Titolo: {$movie -> title}</li>";
    echo "<li>Regista: {$movie -> director}</li>";
    echo "<li>Anno: {$movie -> year}</li>";
    echo "<li>Generi: ";
    echo "<ul>";
    foreach ($movie->genres as $genre) {
        echo "<li>" . $genre->genre . "</li>";
    }
    echo "</ul>";
    echo "</li>";
    echo "<li>{$movie->centurySelector()}</li>";
    echo "<hr>";
}
?>
</ul>  


</body>
</html>