<?php
class Movie {
  public $title;
  public $genre;
  public $score;

  function __construct($_title, $_genre, $_score = 0) {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->score = $_score;
  }

  function getScore() {
    if ($this->score > 50) return 'La serie ha un voto sopra la media';
    if ($this->score <= 50) return 'La serie ha un voto sotto la media';
  }
}

$movie1 = new Movie('Breaking Bad', 'Dramma', 100);
$movie2 = new Movie('Barbie', 'Commedia', 0); // Nulla contro Barbie :(
$get_valutation1 = $movie1->getScore();
$get_valutation2 = $movie2->getScore();
echo $movie1->title . ' Valutazione: ' . $get_valutation1 . '<br>';
echo $movie2->title . ' Valutazione: ' . $get_valutation2;
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

</body>
</html>