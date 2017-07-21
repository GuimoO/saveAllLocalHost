<?php

/*on inclut notre class à instancier*/
include_once 'class_perso.php';

/*on créer un nouvelle objet de class personne*/

$newpeople = new personne('Dupont', 'Jean');

    $newpeople->setAdresse('4 rue du champ, 75000 PARIS');

    $newpeople->setDdn('01/01/1900');
    $newpeople->caculateAge();
    $newpeople->getAge();
    echo $newpeople;