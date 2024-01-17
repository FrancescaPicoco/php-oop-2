<?php

class Type {
    public $typology;

    public function __construct($typology){
        $this->typology=$typology;
    }

    public function getItemTypology(){
        $result = $this->typology;
        return $result;
    }
    
}