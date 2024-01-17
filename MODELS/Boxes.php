<?php
require_once __DIR__ . '/Products.php';
class Boxes extends Products{
    public $materials;
    public $location;
    public $size;

    public function __construct($img ,$name, $price, $descr, Type $type ,array $materials,$location,$size){

        parent::__construct($img ,$name, $price, $descr, $type);
        $this->materials= $materials;
        $this->location= $location;
        $this->size= $size;
    }
}