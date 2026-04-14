<?php

require_once "./Data/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php8-oop-movie</title>
</head>
<body>

<h1>Lista film</h1>

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
    echo "<li>Voto: " . $movie->getRating() . "</li>";
    echo "<li>{$movie->centurySelector()}</li>";
    echo "<hr>";
}
?>
</ul>  


</body>
</html>