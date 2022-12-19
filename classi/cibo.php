<?php

include_once __DIR__ . '/prodotto.php';

class cibo extends prodotto {
  public $peso;
  public $ingredienti;

  public function __construct(
    String $immagine,
    String $nome,
    String $prezzo,
    categoria $categoria,

    String $peso,
    String $ingredienti
    ) {
    $this->peso = $peso;
    $this->ingredienti = $ingredienti;
    parent::__construct($immagine,$nome,$prezzo,$categoria);
  }
}

?>