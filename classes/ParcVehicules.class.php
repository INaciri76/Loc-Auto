<?php 
class ParcVehicules {

    // Tableau statique qui contient tous les véhicules enregistrés
    private static $ParcVehicule = [];

    // Enregistrer un véhicule
    public static function enregistrer(Vehicule $Vehicule) {
        self::$ParcVehicule[] = $Vehicule;
    }

    // Afficher le parc avec __toString()
    public static function AfficherParc() {
        foreach (self::$ParcVehicule as $Vehicule) {
            echo "<br>" . $Vehicule . "<br>";
        }
    }

    // Afficher le parc avec getInfosCompletes()
    public static function getParc() {
        foreach (self::$ParcVehicule as $vehicule) {
            echo get_class($vehicule) . " : " . $vehicule->getInfosCompletes() . "<br>";
        }
    }
}