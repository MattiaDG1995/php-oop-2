<?php

include_once __DIR__ . '/prodotto.php';

class giocattoli extends prodotto {
  public $caratteristiche;
  public $dimensioni;

  public function __construct(
    String $immagine,
    String $nome,
    Float $prezzo,
    categoria $categoria,

    String $caratteristiche,
    Int $dimensioni
    ) {
    $this->caratteristiche = $caratteristiche;
    $this->dimensioni = $dimensioni;
    parent::__construct($immagine,$nome,$prezzo,$categoria);
  }
}

?>