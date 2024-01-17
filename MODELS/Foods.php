<?php
require_once __DIR__ . '/Products.php';
class Foods extends Procudts{
    public $taste;
    public $kg;

    public function __constructor($img ,$name, $price, $descr, Type $type, $taste, $kg){
        parent::__construct($img ,$name, $price, $descr,$type);
        $this->taste=$taste;
        $this->kg=$kg;
    }
}