<?php



session_start();//permet de démarrer une session

define('ROOT', __DIR__); //definit la racine du projet (utile pour tous les chemins du projet

define('DS', DIRECTORY_SEPARATOR);//permet de définir le slash ou l'anti slash des chemins selon l'OS (window= antislash Linux=slash)

require_once(ROOT.DS.'Conf'.DS.'_connect.php');//permet d'inclure les paramètres définit ds le fichier connection de Conf
$destination_default = 'welcome';

//permet de charger la class user dans le repertoire CLASS
require CLASSDIR.DS.'Users.php';



//permet d'appliquer un filtre sur l'élément récupéré (filter_input)
//FILTER_SANITIZE_FULL_SPECIAL_CHARS permet de nettoyer un élément selectionner, impossible d'envoyer du script par ex
$destination = filter_input(INPUT_GET, 'destination', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);






//si $destination est vide il renvoi la destination demandée sinon il nous envoi welcome
$destination = empty($destination)?$destination_default:$destination;

//appel un modele pour effectuer l'action
if (!empty($action)){
    require MODEL.DS.$action.'.php';
}

//verifie que la page existe avant de l'afficher
if (!file_exists(VIEWS.DS.$destination.'.php')){
    //page n'existe pas
    $destination='404';
}






require ('Views'.DS.'page.php');