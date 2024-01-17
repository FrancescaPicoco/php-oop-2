<?php
require_once __DIR__ . '/Products.php';
class Lamps extends Products {
     public $colore;
     public $voltaggio;
     public $potenza;

     public function __construct($img ,$name, $price, $descr, $typology,$colore,$voltaggio,$potenza){

         parent::__construct($img ,$name, $price, $descr,$typology);
         $this->colore=$colore;
         $this->voltaggio=$voltaggio;
         $this->potenza=$potenza;
     }
}