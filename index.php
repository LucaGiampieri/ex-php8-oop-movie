<?php

require_once "./Data/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>ex-php8-oop-movie</title>
</head>
<body class="bg-dark text-light">

<div class="container py-4">
    <header>
            <?php
            require_once "./Components/header.php"
?>
    </header>
    <main>
        <?php
            require_once "./Components/main.php"
?>
    </main>

</div>

</body>
</html>