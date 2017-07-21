<?php

class Users {

    private $id;
    private $email;
    private $password;
    private $nom;
    private $prenom;
    private $profil;
    private $db;

    public function __construct()
    {
        //connection à la BDD
        $db = new PDO(BDD_DRIVER.':host='.BDD_SERVEUR.';dbname='.BDD,BDD_USER,BDD_MDP);
        //Génération d'alerte en cas d'echec d'une requête
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db = $db;
    }

    public function getId() {
        return $this->id;
    }


    public function getEmail()  {
        return $this->email;
    }

    public function getPassword()  {
        return $this->password;
    }

    public function getNom()  {
        return $this-> nom;
    }

    public function getPrenom()  {
        return $this-> prenom;
    }

    public function getProfil()  {
        return $this->profil;
    }

    public function getDb()  {
        return $this->db;
    }


    public function setId($id){
        return $this->id=$id;
    }

    public function setEmail($email){
        return $this->email=$email;
    }

    public function setPassword($password){
        return $this->password=$password;
    }

    public function setNom($nom){
        return $this->nom=$nom;
    }

    public function setPrenom($prenom){
        return $this->prenom=$prenom;
    }

    public function setProfil($profil){
        return $this->profil=$profil;
    }

    public function setDb($db){
        return $this->db=$db;
    }

    function createUser(array $tabUser){

    //ecriture de la requete
    $reqInsertUser = 'INSERT INTO Users (nom, prenom, profil, mdp, email) VALUES';
    $reqInsertUser .='(:nom,:prenom,:profil,:mdp,:email)';


    $user=$this->db->prepare($reqInsertUser);
    $user->execute($tabUser);


    return $this->db->lastInsertId();

    }

    function getAllUsers(){
        $reqGetUsers= 'SELECT * FROM Users';


        $Allusers=$this->db->prepare($reqGetUsers);
        $Allusers->execute();
        $array = get_object_vars($Allusers);

        return $array;

    }

}