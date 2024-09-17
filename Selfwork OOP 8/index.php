<?php

/*
Crea un trait chiamato “Calculator“ definendo le seguenti operazioni tra numeri:

public function sum($a, $b) {
  return $a + $b;
}

public function sub($a, $b) {
  return $a - $b;
}

public function mul($a, $b) {
  return $a * $b;
}

public function div($a, $b) {
  return $a / $b;
}

public function sqr($a){
  return sqrt($numero);
}


Crea quindi una classe Rettangolo con i seguenti attributi:
Base (b);
Altezza (h);

Il tuo compito sara' quello di creare 3 metodi che andranno a calcolare:
Area → b * h
Perimetro → 2 * b + 2 * h
Diagonale → √ hˆ2 + bˆ2 (Tutto sotto radice)

Tutte queste operazioni pero' dovranno essere richiamate dal trait Calculator
*/

trait Calculator {

  public function sum($a, $b) {
    return $a + $b;
  }
  
  public function sub($a, $b) {
    return $a - $b;
  }
  
  public function mul($a, $b) {
    return $a * $b;
  }
  
  public function div($a, $b) {
    return $a / $b;
  }
  
  public function sqr($a){

    return sqrt($a);

  }

}

class Rettangolo{

  use Calculator;

  public $base;
  public $altezza;

  public function __construct($_base, $_altezza){

    $this->base = $_base;
    $this->altezza = $_altezza;

  }

  public function area($base, $altezza){
    
    return $this->mul($base, $altezza);

  }

  public function perimetro($base, $altezza){

    return $this->sum($this->mul($base,2), $this->mul($altezza,2));

  }

  public function diagonale($base, $altezza){

    return $this->sqr($this->sum(pow($base, 2), pow($altezza, 2)));

  }

}

echo "COSTRUIAMO UN RETTANGOLO.\nDIGITA UN NUMERO PER DETERMINARE IL VALORE DELLA BASE:\n";

$sceltaBase = readline();

echo "DIGITA UN NUMERO PER DETERMINARE IL VALORE DELL'ALTEZZA:\n";

$sceltaAltezza = readline();

$rett = new Rettangolo ($sceltaBase,$sceltaAltezza);

//var_dump($rett);

echo "La sua area è di " . $rett->area($sceltaBase,$sceltaAltezza) . "\n";
echo "Il suo perimetro è di " . $rett->perimetro($sceltaBase,$sceltaAltezza) . "\n";
echo "La sua diagonale è di " . $rett->diagonale($sceltaBase,$sceltaAltezza);







