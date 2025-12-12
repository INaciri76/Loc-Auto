<?php
spl_autoload_register(function ($class) {
    include "classes/" . $class . ".class.php";
});
const RC = "<br>";

//---------------TEST POUR CITADINE----------------
    $Citadine1 = new Citadine("Peugeot", "206", "CAR-76-76", 500);
    echo RC;
    echo $Citadine1 ;

//----------TEST POUR FAMILIALE-------------
    echo RC;
    $Familiale1 = new Familiale("Dacia", "Duster", "CAR-27-27", 7);
    echo RC;
    echo $Familiale1;

    echo RC;
    echo RC;
 //----------- TEST POUR UTILITAIRE--------------
    echo RC;
    $Utilitaire1 = new Utilitaire("Renault", "Trafic III", "CAR-95-95", 200);
    echo $Utilitaire1;

    echo RC;
    echo RC;

//-------- Tableau ENREGISTREMENT DES VEHICULES POUR PARC-----------
        $tvehicule = array($Citadine1, $Utilitaire1,$Familiale1); //A modifier si un nouveau vehicule est ajouté 

        foreach ($tvehicule as $vehicule) {
            ParcVehicules::enregistrer($vehicule);
        }

    //----------GESTION DES PARCS-----------

    // Affichage avec __toString()
    echo "<h3>Liste des Véhicules dans le parc : </h3>";
    ParcVehicules::AfficherParc();

    echo RC;
    echo RC;

    // Affichage avec a fonction getParc()
    echo "<h3>Liste des Véhicules dans le parc : </h3>";
    ParcVehicules::getParc();