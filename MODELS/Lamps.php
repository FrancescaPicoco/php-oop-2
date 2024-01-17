<?php
require_once __DIR__ . '/Products.php';
class Lamps extends Procudts {
     public $colore;
     public $voltaggio;
     public $potenza;

     public function __construct($img ,$name, $price, $descr, Type $type,$colore,$voltaggio,$potenza){
        
         parent::__construct($img ,$name, $price, $descr,$type);
         $this->colore=$colore;
         $this->voltaggio=$voltaggio;
         $this->potenza=$potenza;
     }
}