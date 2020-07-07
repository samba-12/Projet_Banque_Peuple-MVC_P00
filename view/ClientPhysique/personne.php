<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
    if (!empty($resultatEnregistrement)) {
        if($resultatEnregistrement == true){
            echo('Enregistrement reussi!');
        }
    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="../../public/script/style2.css">
    <link rel="stylesheet" href="../public/script/style2.css">

</head>
<body>
      <div><img src="../../public/img/logoajout.png" class="logoajout"></div>
              <ul class="menu">
                  <li><a href="../index.html">Accueil</a></li>
                  <li><a href="#Liste">Liste clients</a></li>
                  <li><a href="../accueil_ajout.html">Ajouter client</a></li>
                  <li><a href="#Virement">Virement</a></li>
                  <li><a href="#Assistance">Assistance</a></li>
              </ul>
    <h2>Ajouter un client physique. </h2>

    <!--  NOUVEAU-CLIENT ANCIEN-CLIENT-->
    <span class="check">
       <label for="siCheck">Ancien Client</label><input type="radio" onclick="javascript:Check();" name="Check" id="siCheck">
        <label for="sinoCheck">Nouveau Client</label> <input type="radio" onclick="javascript:Check();" name="Check" id="sinoCheck"><br>
    </span> 

    <div id="ok" style="display:none">                      
       <input type="text" name="lab" placeholder="Id client">
       <button type="submit" name="search"> Rechercher</button>
    </div>
     <span class="salaire">
            <label for="yesCheck" > Salarié </label><input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" class="yesCheck"> 
            <label for="noCheck"> Non Salarié </label><input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" class="noCheck">
            </span> 
    <form method="POST" action="" class="form">
          <div class="formajout">
                  <label for="prenom">Prenom * :</label><br><input name="prenom" id="prenom" type="text"   required="required"/> 
                  <span id="absence_prenom"></span><br>
                  <label for="nom">Nom * :</label><br><input name="nom" id="nom" type="text"  required="required"/> 
                  <span id="absence_nom"></span><br>
                  <label for="adresse">Adresse * :</label><br><input name="adresse" id="adresse" type="text"  required="required"  />
                  <span id="absence_adresse"></span><br>
                  <label for="email">Email :</label><br><input name="email" id="email" type="email" /><br><br>
                  <label for="telephone">Telephone * :</label><br><input name="telephone" id="telephone" type="telephone"  required="required"/> 
                  <span id="absence_telephone"></span>      
          </div>
          <div class="formajout2">
                         <br>
                         <br>
                         <select id="compte" name="compte" required="required" >
                         <option>Choisissez un type de compte *</option>
                         <option>Compte xeewel</option>
                         <option>Compte courant</option>
                         <option>Compte bloque</option>
                    </select >
                  <span id="absence_compte"></span>
                  <br>                
                  <label for="identification">Identification * :</label><br><input name="identification" id="identification" type="text"  required="required" />
                  <span id="absence_identification"></span>
                  <br>
                  <label for="numero">Numero compte* :</label><br><input name="numero" id="numero" type="number"   required="required" />
                  <span id="numero"></span> 
                   <div id="ifYes" style="display:none">
                  <label for="salaire">Salaire  :</label><br><input name="salaire" id="salaire" type="number"  value="0" /> 
                    <br>
                  <label for="infos_employeur">Infos employeur :</label><br><input name="infos_employeur" id="infos_employeur" type="text"  /> 
                  <br>
                  </div>
          </div>
          <div class="col-container1">
                <div class="col"><input type="submit" value="Valider" id="envoi"></div>
                <div class="cols"><input type="reset" value="Annuler" ></div>
          </div>
    </form>
   
<script src="../../public/script/script1.js"></script>
<script src="../public/script/script1.js"></script>

</body>
</html>





