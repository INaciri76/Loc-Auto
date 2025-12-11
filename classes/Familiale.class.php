<?php

class Familiale extends Vehicule {
    private $NBPersonne ;

    public function __construct(string $marque, string $modele, string $id, int $NBPersonne) {

        //appelle de la classe parenté et implementation des données   
        parent::__construct($marque, $modele, $id);

        //ajout de la specificité de la classe citadine
        $this->NBPersonne = $NBPersonne;
    }

    public function PlanifierRevision() {
        echo "Veuillez planifier une revision pour Familiale "  ;
    }

    public function __tostring(): string {
        return parent::__tostring() . "<br>" . "Nombres de personnes :  "  . $this->NBPersonne . " personnes ."; 
    }


}