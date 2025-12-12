<?php 

abstract class Inventoriable {

    // 
    public abstract function getIdentifiant() : string;

    // Chaque élément inventoriable doit fournir ses infos détaillées
    public abstract function getInfosCompletes() : string;

    // Affichage direct avec echo
    public function __toString() : string {
        return "<strong>" . get_class($this) . "</strong> : " . $this->getInfosCompletes();
    }
    
}

