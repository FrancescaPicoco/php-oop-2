<?php
require_once __DIR__ . './Customers.php';

class Premium extends Customers{
    public $sconto;
    public $password;

    public function __constructor( $name, $surname, $email, $phone, $sconto, $password){
        parent::__constructor($name, $surname, $email, $phone);
        $this->sconto=$sconto;
        $this->password=$password;
    }

    public function getPremium()
    {
        $result = "non registrato";
        if ($this->password && $this->sconto) {
            $result = "ecco il tuo sconto";
        }
        return $result;
    }
}