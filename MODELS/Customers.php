<?php
require_once __DIR__ . './Premium.php';
//utente in generale-->mail se registrato
class Customers{
    public $name;
    public $surname;
    public $email;
    public $phone;

    public function __construct($name, $surname, $email, $phone)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->phone = $phone;
    }
    public function getCustomersInfo()
    {
        $result = "Nome:" . $this->name . " " . $this->surname . "<br>" . "Email:" . $this->email . "<br>" . "Numero:" . $this->phone;
        return $result;
    }
}
