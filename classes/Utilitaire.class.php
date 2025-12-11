<?php

class Utilitaire extends Vehicule {

    private $ChargeUtile ;

    public function __construct(string $marque, string $modele, string $id, int $ChargeUtile) {

        //appelle de la classe parenté et implementation des données   
        parent::__construct($marque, $modele, $id);

        //ajout de la specificité de la classe citadine
        $this->ChargeUtile = $ChargeUtile;
    }

    public function PlanifierRevision() {
        echo "Veuillez planifier une revision pour Utilitaire "  ;
    }

    public function __tostring(): string {
        return parent::__tostring() . "<br>" . "Charge Utile :  "  . $this->ChargeUtile . " kg ."; 
    }
}