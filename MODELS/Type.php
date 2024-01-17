<?php
class Type {
    public $typology;

    public function __construct($typology) {
        $this->typology = $typology;
    }

    public function getTypology() {
        return $this->typology;
    }

    // Aggiungi un metodo di accesso
    public function setTypology($typology) {
        $this->typology = $typology;
    }
}