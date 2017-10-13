<?php
require 'connexion.php';

// je récupère la compétence :
$id_competence = $_GET['id_competence']; // par l'id et $_GET
$resultat = $pdo -> query("SELECT * FROM t_competences WHERE id_competence ='$id_competence'"); // la requête est égale à m'id
$ligne_competence = $resultat->fetch();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php
        $resultat = $pdo -> query("SELECT * FROM t_utilisateurs WHERE id_utilisateur = '1'");
        $ligne_utilisateur = $resultat -> fetch();
        ?>
        <title>Admin : <?= $ligne_utilisateur['pseudo']; ?></title>
    </head>
    <body>
        <h1>Admin : <?= $ligne_utilisateur['prenom']; ?></h1>
        <p>texte</p>
        <hr>
        <h2>Modification d'une compétence</h2>
        <?= $ligne_competence['competence']; ?>
    </body>
</html>
