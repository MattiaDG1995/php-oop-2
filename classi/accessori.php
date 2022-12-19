<?php

include_once __DIR__ . '/prodotto.php';

class accessori extends prodotto {
  public $materiali;
  public $dimensioni;

  public function __construct(
    String $immagine,
    String $nome,
    Float $prezzo,
    categoria $categoria,

    String $materiali,
    Int $dimensioni
    ) {
    $this->materiali = $materiali;
    $this->dimensioni = $dimensioni;
    parent::__construct($immagine,$nome,$prezzo,$categoria);
  }
}

?>