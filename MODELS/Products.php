<?php
require_once __DIR__ . '/Type.php';

class Products {
    public $img;
    public $name;
    public $price;
    public $descr;
    public $type;

    public function __construct($img ,$name, $price, $descr, Type $type){
       $this->img=$img;
       $this->name=$name;
       $this->price=$price;
       $this->descr=$descr;
       $this->type=$type;
    }
}