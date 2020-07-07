<?php
require 'Dbaccess.php';

class Entreprise
{

    private $nomentreprise;
    private $adresse;
    private $email;
    private $telephone;
    private $ninea;
    private $compte;
    private $numero;

  
    public function __construct($nomentreprise,$adresse,$email,$telephone, $ninea,$compte, $numero)
    {
        $this->nomentreprise = $nomentreprise;
        $this->adresse = $adresse;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->ninea = $ninea;
        $this->compte = $compte;
        $this->numero = $numero;

    }

   
    public function getNomentreprise()
    {
        return $this->nomentreprise;
    }
    public function setNomentreprise($nomentreprise)
    {
        $this->nomentreprise = $nomentreprise;
    }

    //GET ET SET
    public function getAdresse(){
        return $this->adresse;
    }
    public function setAdresse($adresse){
        $this->adresse=$adresse;
    }


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
  
    
    public function getNinea()
    {
        return $this->ninea;
    }
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;
    }

  
    //GET ET SET

    public function getCompte(){
        return $this->compte;
    }
    public function setCompte($compte){
        $this->compte=$compte;
    }
    


    
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }



    public function enregistrer()
    {
        try{
        $connexion = new Dbaccess();

        $bd = $connexion->getConnexion();
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $bd->prepare(
            "INSERT INTO `client_entreprise`(`id_entreprise`, `nom_entreprise`, `adresse`,`email`, `telephone`, `ninea`, `compte`,`numero`) 
            VALUES (null,?,?,?,?,?,?,?)");
                //var_dump($requete);
               // die;
         $resultat = $requete->execute
        (array(
                $this->getNomentreprise(),
                $this->getAdresse(),
                $this->getEmail(),
                $this->getTelephone(),
                $this->getNinea(),
                $this->getCompte(),
                $this->getNumero(),

            )
        ) ;
        return $resultat;
        }
        catch(PDOException $ex){
            echo 'Echec de la connexion: '.$ex->getMessage();
        }
    }




}