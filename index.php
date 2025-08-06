<?php

require_once 'Models/Genre.php';
require_once 'Models/Movie.php';
require_once 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>OOP Movie</title>
</head>

<body>
    <h1>🎥 Lista Film</h1>
    <hr>

    <div class="container py-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php
            foreach ($movies as $movie) {
                echo '<div class="col">';
                echo '<div class="card h-100 shadow-sm">';
                echo    '<img src="' . $movie->poster . '" class="card-img-top" alt="' . $movie->title . '">';
                echo    '<div class="card-body">';
                echo        '<h5 class="card-title">' . $movie->title . '</h5>';
                echo        '<p class="card-text"><strong>Anno:</strong> ' . $movie->year . '</p>';
                echo        '<p class="card-text"><strong>Genere:</strong> ' . $movie->getGenres() . '</p>';
                echo        '<p class="card-text"><strong>Rating:</strong> ' . $movie->rating . '/10</p>';
                echo    '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>


</body>

</html>