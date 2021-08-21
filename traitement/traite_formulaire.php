<?php

   
   include('connexion/connexion_bdd.php');

   if(isset($_POST['envoyer'])){

    $nom = htmlspecialchars($_POST['nom_etudiant']);
    $prenom = htmlspecialchars($_POST['prenom_etudiant']);
    $numero_aej = htmlspecialchars($_POST['numero_aej']);
    $Telephone = htmlspecialchars($_POST['Telephone']);
    $email = htmlspecialchars($_POST['email']);
    $fonction = htmlspecialchars($_POST['fonction']);

     // Valider l'email
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){

   $req = $bdd->prepare('INSERT INTO prairie(nom_etudiant,prenom_etudiant,numero_aej,Telephone,email,fonction) VALUES(?,?,?,?,?,?)');
   $req ->execute(array($nom,$prenom,$numero_aej,$Telephone,$email,$fonction));
    
   header('location:liste_etudiant.php');
         
      }else{
         $error ="L'adresse e-mail n'est pas valide";
        echo $error;
         }
   }

?>