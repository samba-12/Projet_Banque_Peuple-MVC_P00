<?php
require '../model/Personne.php';
if (!empty($_POST)){
   // var_dump($_POST);
  // die();
    $personne = new Personne( $_POST['prenom'], $_POST['nom'], $_POST['adresse'], $_POST['email'], $_POST['telephone'], $_POST['compte'],$_POST['salaire'],  $_POST['infos_employeur'], $_POST['identification'], $_POST['numero']);
    $resultatEnregistrement = $personne->enregistrer();
    //var_dump($resultatEnregistrement);    
   // var_dump($_POST['identification']);  
}
include '../view/ClientPhysique/personne.php';

