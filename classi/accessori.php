<?php

include_once __DIR__ . '/prodotto.php';

class accessori extends prodotto {
  public $materiali;
  public $dimensioni;

  public function __construct(
    String $immagine,
    String $nome,
    String $prezzo,
    categoria $categoria,

    String $materiali,
    String $dimensioni
    ) {
    $this->materiali = $materiali;
    $this->dimensioni = $dimensioni;
    parent::__construct($immagine,$nome,$prezzo,$categoria);
  }
}

?>