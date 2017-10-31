<?php
require 'connexion.php';

// mise à jour d'une compétence
if (isset($_POST['r_titre'])) { // par le nom du premier input
    $id_realisation = $_POST['id_realisation'];
    $titre = addslashes($_POST['r_titre']);
    $soustitre = addslashes($_POST['r_soustitre']);
    $dates = addslashes($_POST['r_dates']);
    $description = addslashes($_POST['r_description']);

    $pdo -> exec("UPDATE t_realisations SET r_titre = '$titre', r_soustitre ='$soustitre', r_dates ='$dates', r_description ='$description' WHERE id_realisation = '$id_realisation'"); // SQL OK
    header('location: realisations.php');
    exit();
}

// je récupère la formation :
$id_realisation = $_GET['id_realisation']; // par l'id et $_GET
$resultat = $pdo -> query("SELECT * FROM t_realisations WHERE id_realisation ='$id_realisation'"); // la requête est égale à m'id
$ligne_realisation = $resultat->fetch();

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
        <h2>Modification d'une réalisation</h2>
        <p><b><?= $ligne_realisation['r_titre']; ?></p>

        <form action="modif_realisation.php" method="post">

            <label for="r_titre">Titre :</label><br><br>
            <input type="text" name="r_titre" value="<?= $ligne_realisation['r_titre']; ?>"><br><br>

            <label for="r_soustitre">Soustitre :</label><br><br>
            <input type="text" name="r_soustitre" value="<?= $ligne_realisation['r_soustitre']; ?>"><br><br>

            <label for="r_dates">Dates :</label><br><br>
            <input type="text" name="r_dates" value="<?= $ligne_realisation['r_dates']; ?>"><br><br>

            <label for="f_description">Description :</label><br><br>
            <input type="text" name="r_description" value="<?= $ligne_realisation['r_description']; ?>"><br><br>

            <input hidden name="id_realisation" value="<?= $ligne_realisation['id_realisation']; ?>">

            <input type="submit" value="Mettre à jour">
        </form>
    </body>
</html>
