<?php

require_once "./Models/Movie.php";

$movies = [
    new Movie("Il Padrino", "Francis Ford Coppola", 1972, "Crime"),
    new Movie("Matrix", "Wachowski", 1999, "Sci-fi"),
    new Movie("Inception", "Christopher Nolan", 2010, "Sci-fi"),
    new Movie("Parasite", "Bong Joon-ho", 2019, "Thriller"),
    new Movie("Pulp Fiction", "Quentin Tarantino", 1994, "Crime"),
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
    foreach ($movie as $data) {
        echo "<li> $data </li>";
    }
    echo "<hr>";
}
?>
</ul>  


</body>
</html>