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