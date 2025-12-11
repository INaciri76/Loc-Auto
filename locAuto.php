<?php
spl_autoload_register(function ($class) {
    include "classes/" . $class . ".class.php";
});
const RC = "<br>";
//---------------TEST POUR CITADINE----------------
    echo "<strong>Citadine : PEUGEOT</strong>";
    $Citadine1 = new Citadine("Peugeot", "206", "CAR-76-76", 500);
    echo RC;
    echo $Citadine1;

//----------TEST POUR FAMILIALE-------------
    echo RC;
    echo RC;
    echo "<strong> Familial : DACIA </strong>";
    $Familiale1 = new Familiale("Dacia", "Duster", "CAR-27-27", 7);
    echo RC;
    echo $Familiale1;

    echo RC;
    echo RC;
 //----------- TEST POUR UTILITAIRE--------------
    echo "<strong> Utilitaire : RENAULT </strong>";
    echo RC;
    $Utilitaire1 = new Utilitaire("Renault", "Trafic III", "CAR-95-95", 200);
    echo $Utilitaire1;