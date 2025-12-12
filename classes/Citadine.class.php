<?php
    require_once "Vehicule.class.php";
class Citadine extends Vehicule {
    private $autonomie ;
    public function __construct(string $marque, string $modele, string $id, int $autonomie) {

        //appelle de la classe parenté et implementation des données   
        parent::__construct($marque, $modele, $id);

        //ajout de la specificité de la classe citadine
        $this->autonomie = $autonomie;
    }

    public function PlanifierRevision() {
        echo "Veuillez planifier une revision pour Citadine "  ;
    }

    public function __tostring(): string {
        return parent::__tostring() . "<br>" . "Autonomie citadine :  "  . $this->autonomie . " km ."; 
    }

    public function getIdentifiant() : string {
        return $this->$id;
    }

    public function getInfosCompletes() : string {
        return "Marque : " . $this->marque . ", Modèle :" . $this->modele . ", Identifiant : " . $this->id . ", Autonomie : " . $this->autonomie;
    }
    
}