<?php
require '../model/Entreprise.php';

if(!empty($_POST)){
   
   $entreprise = new Entreprise($_POST['nom_entreprise'], $_POST['adresse'], $_POST['email'], $_POST['telephone'], $_POST['ninea'],  $_POST['compte'],$_POST['numero']);
 // var_dump($entreprise);
   //die;
   $resultatEnregistrement = $entreprise->enregistrer();
}

require '../view/clientEntreprise/entreprise.php';


