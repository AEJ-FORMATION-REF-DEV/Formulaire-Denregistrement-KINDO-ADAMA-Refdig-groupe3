<?php
   
   //Insertion de la connexion à la bdd et de l'opération d'envoi sur le formulaire
   include('connexion/connexion_bdd.php');
   include('traitement/traite_formulaire.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE IGS</title>
 <link rel="stylesheet" href="css/style.css">
</head>
<body class="couleur-formulaire">
  

   
<div id="container">


<section>

    <!-- Création du formulaire avec utilisation de la méthode POST pour la récupération des données du formulaire -->
        <form action="" method="POST">
                        <!-- Titre du formulaire -->
                    <h1>Formulaire d'enregistrement</h1>
           
            <div class="espace">

                <label for="nom">Nom</label>
                <input id="nom"  type="text" name="nom_etudiant" placeholder="@nom" required="required">

            </div>
        


            <div class="espace">
                <label for="prenom">Prenom</label>
                <input id="prenom"  type="text" name="prenom_etudiant"  placeholder="@dams" required="required">
            </div>
           

            <div class="espace">

                <label for="numero">Numéro AEJ</label>
                <input id="numero" type="number" name="numero_aej" placeholder="numéro aej" required="required">

            </div>
            

            <div class="espace">

                <label for="telephone">Téléphone</label>
                <input id="telephone" type="tel" name="Telephone" placeholder="+00111222" required="required">

            </div>

            <div class="espace">

                <label for="email">E-mail</label>
                <input id="email" type="email" name="email" placeholder='rire@yahoo.fr' required="required">

            </div>
         
            <!-- Champs de selection optionnel -->
            <div class="espace">
            <label for="fonction">Fonction</label>
                <select name="fonction" id="fonction" required="required">
                <option selected="true" disabled="disabled">--Veuillez choisir une fonction--</option>
                <option value="Referent digital"> Référent digital</option>
                <option value="Data IA"> Data IA</option>
                <option value="Dev web et mobile" > Développeur Web et Mobile</option>
                </select>
            </div>
                <div class="espace">
                <input type="submit" class="bouton" value="Enregistrer" name="envoyer">
                
                </div>
                <!-- Lien ramenant à la liste des étudiants -->
                <input type="button" class="bton" value="LISTE DES ETUDIANTS" onclick="window.location.href='liste_etudiant.php';" />
        </form>

        </section>
  
</div>

 

</body>
</html>
