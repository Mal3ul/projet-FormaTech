<?php


class Employee {
    private $id;
    private $prénom;
    private $nom;
    private $poste;
    private $email;

    public function __construct($id, $firstName, $lastName, $position, $email) {
        $this->id = $id;
        $this->prénom = $prénom;
        $this->nom = $nom;
        $this->poste = $poste;
        $this->email = $email;
    }
}


?>