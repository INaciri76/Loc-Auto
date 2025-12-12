<?php 
require_once "Inventoriable.class.php";

abstract class Vehicule extends Inventoriable{
    
    protected $marque;
    protected $modele;
    protected $id;

    // Constructeur 
    public function __construct(string $marque, string $modele, string $id) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->id = $id;
    }


    // Méthode abstraite pour planifier une révision
    public abstract function planifierRevision();

    // Méthode abstraite pour obtenir l'identifiant
    public abstract function getIdentifiant() : string;

    // Méthode abstraite pour obtenir les infos complètes
    public abstract function getInfosCompletes() : string;

    // Affichage sous forme de chaîne
    public function __toString(): string {
        return "<strong>".get_class($this)."</strong> :" . "<br> Marque : ". $this->marque . "<br>Modèle : "  . $this->modele . "<br> Identifiant : " . $this->id;
    }

}