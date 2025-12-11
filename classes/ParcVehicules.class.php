<?php 
class ParcVehicules {

    //Donnee membre qui ne peut se creer qu'en une seule fois 
    private static $ParcVehicule = [];

    public static function enregistrer(Vehicule $Vehicule) {
        self::$ParcVehicule[] = $Vehicule;
    }

    public static function AfficherParc() {
        foreach (self::$ParcVehicule as $Vehicule) {
            echo  "<br>" . $Vehicule . "<br>";
        }
    }
}
