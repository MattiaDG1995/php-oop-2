<?php

include_once __DIR__ . '/prodotto.php';

class cibo extends prodotto {
  public $peso;
  public $ingredienti;

  public function __construct(
    String $immagine,
    String $nome,
    Float $prezzo,
    categoria $categoria,

    Int $peso,
    String $ingredienti
    ) {
    $this->peso = $peso;
    $this->ingredienti = $ingredienti;
    parent::__construct($immagine,$nome,$prezzo,$categoria);
  }
}

?>