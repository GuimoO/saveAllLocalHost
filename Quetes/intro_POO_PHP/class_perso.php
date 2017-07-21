<?php

class personne {

    /**
     * donne un nom
     * @var string
     */
    private $nom;

    /*
     * donne un prenom
     * @var string
     */
    private $prenom;

    /*
     * donne une adresse
     * @var string
     */
    private $adresse;

    /*
     * donne une date de naissance
     * @var string
     */
    private $ddn;

    /*
     * donne un age
     * @var int
     */
    private $year;

    /*
     * methode construct pour nom et prenom
     */
    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    /*
     * methode qui modifie l'adresse
     * @var string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    /*
     * methode qui permet de définir une date de naissance
     * @var string
     */
    public function getDdn()
    {
        return $this->ddn;
    }

    public function setDdn($ddn)
    {
        $this->ddn = $ddn;
        return $this;
    }

    /*
     * methode qui permet de calculer l'age à partir de la date de naissance
     */
    public function getAge()
    {
        return $this->year;
    }

    public function caculateAge()
    {
        //je transforme la ddn en timestamp (tps en secondes)
        $birthday = strtotime($this->ddn);
        //je get la date actuelle en format timestamp (tps en secondes)
        $now=time();
        //je calcul la différence entre les 2 dates (tjrs en secondes)
        $diff=$now -$birthday;
        //je convertis le temps en seconde en années et j'arrondis av le floor
        $year= floor(($diff * 3.17098e-8)/1);

        $this->year = $year;
        return $this;
    }

    /*
     * methode qui affiche les infos d'une personne
     */

    public function __toString()
    {

        $str= "La personne ici décrite est " . $this->nom . " " . $this->prenom . "<br>" .
              "Cette personne habite au: " . $this->adresse . "<br>" .
            "Elle est née le : " . $this->ddn . " et a donc " . $this->year . " ans.";

        return $str;
    }
}




