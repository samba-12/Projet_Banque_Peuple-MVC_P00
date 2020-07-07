function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';
}

function Check() {
    if (document.getElementById('siCheck').checked) {
        document.getElementById('ok').style.display = 'block';
    }
    else  if (document.getElementById('sinoCheck').checked){
    	document.getElementById('ok').style.display = 'none';

}
}

function salaire() {
    if (document.getElementById('sinoCheck').checked) {
        document.getElementById('nook').style.display = 'block';
    }
    else  if (document.getElementById('siCheck').checked){
    	document.getElementById('nook').style.display = 'none';

}
}




// function Check1() {
//     if (document.getElementById('sinoCheck').checked) {
//         document.getElementById('nook').style.display = 'block';
//     }
//     else document.getElementById('nook').style.display = 'none';

// }



    var enregistrer = document.getElementById('envoi');
    enregistrer.addEventListener('click', f_valider);

    var prenom = document.getElementById('prenom');
    var prenom_m = document.getElementById('absence_prenom');

	var nom = document.getElementById('nom');
    var nom_m = document.getElementById('absence_nom');

	var adresse = document.getElementById('adresse');
    var adresse_m = document.getElementById('absence_adresse');

    var telephone = document.getElementById('telephone');
    var telephone_m = document.getElementById('absence_telephone');

  	var compte = document.getElementById('compte');
    var compte_m = document.getElementById('absence_compte');

    var salaire = document.getElementById('salaire');
    var salaire_m = document.getElementById('absence_salaire');
    
     var identification = document.getElementById('identification');
    var identification_m = document.getElementById('absence_identification');

    
    
    function f_valider(e){
		    	if (prenom.validity.valueMissing) {
		    		e.preventDefault();
		    		prenom_m.textContent ='renseignez le prenom';
		    		prenom_m.style.color ='red';
		    	}
		    	 else if (nom.validity.valueMissing) {
		    		e.preventDefault();
		    		nom_m.textContent ='renseignez le  nom';
		    		nom_m.style.color ='red';
		    	}
		    	 else if (adresse.validity.valueMissing) {
		    		e.preventDefault();
		    		adresse_m.textContent ='renseignez votre adresse';
		    		adresse_m.style.color ='red';
		    	}
		    	else if (telephone.validity.valueMissing) {
		    		e.preventDefault();
		    		telephone_m.textContent ='renseignez votre telephone';
		    		telephone_m.style.color ='red';
		    	}
		    	else if (compte.validity.valueMissing) {
		    		e.preventDefault();
		    		compte_m.textContent ='renseignez votre compte';
		    		compte_m.style.color ='red';
		    	}
		    	else if (salaire.validity.valueMissing) {
		    		e.preventDefault();
		    		salaire_m.textContent ='renseignez votre compte';
		    		salaire_m.style.color ='red';
		    	}
		    	else if (identification.validity.valueMissing) {
		    		e.preventDefault();
		    		identification_m.textContent ='renseignez votre compte';
		    		identification_m.style.color ='red';
		    	}

		    	else{
		    		alert('enregistrement valider')
		    	}

    }

    var enregistrer2 = document.getElementById('envoyer');
    enregistrer2.addEventListener('click', f_valid);

    var nom_entreprise = document.getElementById('nom_entreprise');
    var nom_entreprise_m = document.getElementById('absence_nom_entreprise');
    function f_valid(e){
					if (nom_entreprise.validity.valueMissing) {
		    		e.preventDefault();
		    		nom_entreprise_m.textContent ='renseignez votre nom-entreprise';
		    		nom_entreprise_m.style.color ='red';
		    	}


		    	else{
		    		alert('enregistrement valider')
		    	}

    }
    