<?php
require_once __DIR__ . '/models/movie.php';

$movie1 = new Movie('Breaking Bad', 'Dramma', 100);
$movie2 = new Movie('Barbie', 'Commedia', 0); // Nulla contro Barbie :(

$get_valutation1 = $movie1->getScore();
$get_valutation2 = $movie2->getScore();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>
</head>
<body>
  <h1>Serie</h1>
  <div class="movie">
    <h3><?= $movie1->title ?></h3>
    <p>Genere: <?= $movie1->genre ?></p>
    <p>Valutazione: <?= $get_valutation1 . ' ' . $movie1->score ?>/100</p>
  </div>

  <div class="movie">
    <h3><?= $movie2->title ?></h3>
    <p>Genere: <?= $movie2->genre ?></p>
    <p>Valutazione: <?= $get_valutation2 . ' ' . $movie2->score ?>/100</p>
  </div>
</body>
</html>