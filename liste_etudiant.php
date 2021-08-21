<?php 

include('connexion/connexion_bdd.php');

$req = $bdd->query('SELECT * FROM prairie');
$etudiants = $req->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>LISTE ETUDIANTS</title>
</head>
<body>
    

<div id="container">

  

        <h1>Liste des étudiants Refdig</h1>

        <!-- Lien ramenant au formulaire d'Inscription -->
      <input type="button" class="btton" value="AJOUTER UN NOUVEL ETUDIANT +" onclick="window.location.href='index.php';" />

<!--         
        Création du tableau pour afficher les informations de la bdd -->
        <table class="table">
            <tbody>
               
                <tr class="correspondance">

                    <td>N°</td>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Numéro AEJ</td>
                    <td>Numéro de téléphone</td>
                    <td>E-mail</td>
                    <td>Fonction</td>
                    <td>Date d'enregistrement</td>

                </tr>
                
                <!-- récupération des données avec foreach -->
                <?php foreach($etudiants as $etudiant): ?>

                <tr class="effet">

                    <td><?php echo $etudiant['id']?></td>
                    <td><?= $etudiant['nom_etudiant']?></td>
                    <td><?= $etudiant['prenom_etudiant']?></td>
                    <td><?= $etudiant['numero_aej']?></td>
                    <td><?= $etudiant['Telephone']?></td>
                    <td><?= $etudiant['email']?></td>
                    <td><?= $etudiant['fonction']?></td>
                    <td><?= $etudiant['date']?></td>
                  
                </tr>
                <?php endforeach ?>
                
            </tbody>
        </table>
    
</div>
</body>
</html>