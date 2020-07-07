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
    <link rel="stylesheet" href="../public/script/style2.css">
    <link rel="stylesheet" href="../../public/script/style2.css">

</head>
<body>
      <div><img src="../../public/img/logoajout.png" class="logoajout"></div>
              <ul class="menu">
                  <li><a href="../../index.html">Accueil</a></li>
                  <li><a href="#Liste">Liste clients</a></li>
                  <li><a href="../../accueil_ajout.html">Ajouter client</a></li>
                  <li><a href="#Virement">Virement</a></li>
                  <li><a href="#Assistance">Assistance</a></li>
              </ul>
    <h2>ENTREPRISE</h2>
    <form method="POST"  class="form">
      <div class="formajout">
            <label for="nom_entreprise">Nom Entreprise* :</label><br><input name="nom_entreprise" id="nom_entreprise" type="text" required="required"/> 
            <span id="absence_nom_entreprise"></span><br>
            <label for="adresse">Adresse * :</label><br><input name="adresse" id="adresse" type="text"required="required"  />
            <span id="absence_adresse"></span><br>
            <label for="email">Email :</label><br><input name="email" id="email" type="email" /><br><br>
            <label for="tel">Telephone * :</label><br><input name="telephone" id="telephone" type="telephone" required="required"  /> 
            <span id="absence_tel"></span><br>
      </div>
      <div class="formajout2">
            <label for="salaire">NINEA * :</label><br><input name="ninea" id="ninea" type="number" required="required"/> 
            <br><br> 
            		<select id="compte" name="compte" required="required">
            		     <option>Choisissez un type de compte *</option>
            		     <option>Compte épargne simple et xeewel</option>
            		     <option>Compte courant</option>
            		     <option>Compte bloque</option>
            		</select >
                <span id="absence_list"></span>
                <br>
                <label for="numero">Numero compte* :</label><br><input name="numero" id="numero" type="number" required="required" /> 
      </div>
      <div class="col-container1">
                <div class="col"><input type="submit" value="Valider" id="envoyer"></div>
                <div class="col"><input type="submit" value="Annuler" ></div>
      </div>
    </form>
<script src="../../public/script/script1.js"></script>
</body>
</html>