<?php
include 'Dbaccess.php';

class Personne
{
    private $prenom;
    private $nom;
    private $adresse;
    private $email;
    private $telephone;
    private $compte;
    private $salaire;
    private $infos_employeur;
    private $identification;
    private $numero;

    
    public function __construct( $prenom,$nom, $adresse, $email, $telephone,$compte, $salaire,  $infos_employeur, $identification,$numero)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->compte = $compte;
        $this->salaire = $salaire;
        $this->infos_employeur = $infos_employeur;
        $this->indentification = $identification;
        $this->numero = $numero;
    }

    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }
    //GET ET SET

    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }

    //GET ET SET
    public function getAdresse(){
        return $this->adresse;
    }
    public function setAdresse($adresse){
        $this->adresse=$adresse;
    }
    //GET ET SET

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    //GET ET SET

    public function getTelephone(){
        return $this->telephone;
    }
    public function setTelephone($telephone){
        $this->telephone=$telephone;
    }
    //GET ET SET

    public function getCompte(){
        return $this->compte;
    }
    public function setCompte($compte){
        $this->compte=$compte;
    }
    //GET ET SET
    public function getSalaire(){
        return $this->salaire;
    }
    public function setSalaire($salaire){
        $this->salaire=$salaire;
    }
    //GET ET SET
    public function getInfosEmployeur(){
        return $this->infos_employeur;
    }
    public function setInfosEmployeur($infos_employeur){
        $this->infos_employeur=$infos_employeur;
    }
    //GET ET SET
    /**
     * Get the value of identification
     */ 
    public function getIdentification()
    {
        return $this->identification;
    }

    public function setIdentification($identification)
    {
        $this->identification = $identification;

        return $this;
    }
    
    //GET ET SET
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero=$numero;
    }
    //GET ET SET


    public function enregistrer()
    {
        try{
        $connexion = new Dbaccess();

        $bd = $connexion->getConnexion();
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = $bd->prepare(
            "INSERT INTO `client_physique`(`id_client`, `prenom`, `nom`, `adresse`, `email`, `telephone`, `compte`, `salaire`, `infos_employeur`, `identification`, `numero`)
             VALUES (null,?,?,?,?,?,?,?,?,?,?)");

        $resultat = $requete->execute
        (array(
                $this->getPrenom(),
                $this->getNom(),
                $this->getAdresse(),
                $this->getEmail(),
                $this->getTelephone(),
                $this->getCompte(),
                $this->getSalaire(),
                $this->getinfosEmployeur(),
                $this->getIdentification(),
                $this->getNumero()

            )
        ) ;
        return $resultat;
    }
    catch(PDOException $ex){
        echo 'Echec de la connexion: '.$ex->getMessage();
    }
}


    
}