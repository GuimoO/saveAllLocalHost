<?php

//constantes BDD
define('BDD_DRIVER', 'mysql');//BDD utilisée
define('BDD_SERVEUR', 'localhost');//serveur local
define('BDD_USER', 'root');//USer
define('BDD_MDP', 'jecode4bleau');//MP
define('BDD', 'FrameWorkMaison');//Compte

//timezone
date_default_timezone_set('UTC');//definit la timezone où l'on se trouve
setlocale(LC_TIME, 'fr_FR.UTF8');//definit l'heure locale


//définition chemins absolues des repertoires
define('MODEL', ROOT.DS.'Model');
define('VIEWS', ROOT.DS.'Views');
define('CLASSDIR', ROOT.DS.'Class');
define('LOGS_DIR', ROOT.DS.'Logs');
