<?php

//on définit le traitement que l'on veut a minima et pr sécuriser notre form


//applique différent filtres au champ du form
$userForm = array('nom'=>FILTER_SANITIZE_FULL_SPECIAL_CHARS,
                    'prenom'=>FILTER_SANITIZE_FULL_SPECIAL_CHARS,
                    'email'=> FILTER_SANITIZE_EMAIL,
                    'pwd'=>FILTER_SANITIZE_FULL_SPECIAL_CHARS,
                    'verifpwd'=>FILTER_SANITIZE_FULL_SPECIAL_CHARS,
                    'profil'=>FILTER_SANITIZE_NUMBER_INT);


//agit sur le post (des données post du form d'enregistrement) dans son intégralité grace à l'ensemble de filtre du tableau ci dessus
$user = filter_input_array(INPUT_POST, $userForm);



//securisation mp
$user['mdp'] = password_hash($user['pwd'], PASSWORD_BCRYPT);

unset($user['pwd']);
unset($user['verifpwd']);


$objUser = new Users();
$idUser = $objUser->createUser($user);