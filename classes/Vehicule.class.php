<?php 

abstract class Vehicule {
    protected $marque;
    protected $modele;
    protected $id;

    //constructeur 
    public function __construct(string $marque, string $modele, string $id) 
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->id = $id;
    }

    //planifier une revision 
    public abstract function PlanifierRevision();


    //Fonction qui retourne une chaine de caractere
    public function __tostring(): string  
    {
        return "<strong>".get_class($this)."</strong>  :" . "<br>" . "Marque : ". $this->marque . "<br>" . " Modele : "  . $this ->modele . "<br>" . "identifiant : " . $this -> id ;
    }
}