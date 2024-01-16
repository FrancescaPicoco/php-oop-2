<?php
require_once __DIR__ . '/Products.php';
class Foods extends Procudts{
    public $taste;
    public $kg;

    public function __constructor($img ,$name, $price, $descr, Type $type,$taste,$kg){
        $this->img=$img;
       $this->name=$name;
       $this->price=$price;
       $this->descr=$descr;
       $this->type=type;
        $this->taste=$taste;
        $this->kg=$kg;
    }
}