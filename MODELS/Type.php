<?php
trait Type {
    public $typology;

    public function __construct($typology) {
        $this->typology = $typology;
    }

    public function getTypology() {
        return $this->typology;
    }

    // Aggiungo un metodo di accesso
    //public function setTypology($typology) {
    //    $this->typology = $typology;
    //}
}