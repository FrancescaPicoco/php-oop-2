<?php
require_once __DIR__ . '/Type.php';

class Products {
    public $img;
    public $name;
    public $price;
    public $descr;

    public function __construct($img ,$name, $price, $descr){
       $this->img=$img;
       $this->name=$name;
       $this->price=$price;
       $this->descr=$descr;
    }
}