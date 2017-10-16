<?php
require 'connexion.php';

// mise à jour d'une compétence
if (isset($_POST['competence'])) { // par le nom du premier input
    $competence = addslashes($_POST['competence']);
    $c_niveau = addslashes($_POST['c_niveau']);
    $id_competence = $_POST['id_competence'];

    $pdo -> exec("UPDATE t_competences SET competence = '$competence', c_niveau ='$c_niveau' WHERE id_competence = '$id_competence'");
    header('location: competence.php');
    exit();
}

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
        <p><b><?= $ligne_competence['competence']; ?></p>

        <form action="modif_competence.php" method="post">

            <label for="competence">Compétence :</label><br><br>
            <input type="text" name="competence" value="<?= $ligne_competence['competence']; ?>"><br><br>

            <input type="number" name="c_niveau" value="<?= $ligne_competence['c_niveau']; ?>"><br><br>

            <input hidden name="id_competence" value="<?= $ligne_competence['id_competence']; ?>">

            <input type="submit" value="Mettre à jour">
        </form>
    </body>
</html>
