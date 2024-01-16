<?php
require_once __DIR__ . '/Products.php';
class Boxes extends Products{
    public $materials;
    public $location;
    public $size;

    public function __construct($img ,$name, $price, $descr, Type $type ,array $materiali,$locazione,$grandezza){
        $this->img=$img;
       $this->name=$name;
       $this->price=$price;
       $this->descr=$descr;
       $this->type=type;
        $this->materiali= $materials;
        $this->locazione= $location;
        $this->grandezza= $size;
    }
}