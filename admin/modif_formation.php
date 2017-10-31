<?php
require 'connexion.php';

// mise à jour d'une compétence
if (isset($_POST['f_titre'])) { // par le nom du premier input
    $id_formation = $_POST['id_formation'];
    $titre = addslashes($_POST['f_titre']);
    $soustitre = addslashes($_POST['f_soustitre']);
    $dates = addslashes($_POST['f_dates']);
    $description = addslashes($_POST['f_description']);

    $pdo -> exec("UPDATE t_formations SET f_titre = '$titre', f_soustitre ='$soustitre', f_dates ='$dates', f_description ='$description' WHERE id_formation = '$id_formation'"); // SQL OK
    header('location: formations.php');
    exit();
}

// je récupère la formation :
$id_formation = $_GET['id_formation']; // par l'id et $_GET
$resultat = $pdo -> query("SELECT * FROM t_formations WHERE id_formation ='$id_formation'"); // la requête est égale à m'id
$ligne_formation = $resultat->fetch();

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
        <h2>Modification d'une formation</h2>
        <p><b><?= $ligne_formation['f_titre']; ?></p>

        <form action="modif_formation.php" method="post">

            <label for="f_titre">Titre :</label><br><br>
            <input type="text" name="f_titre" value="<?= $ligne_formation['f_titre']; ?>"><br><br>

            <label for="f_soustitre">Soustitre :</label><br><br>
            <input type="text" name="f_soustitre" value="<?= $ligne_formation['f_soustitre']; ?>"><br><br>

            <label for="f_dates">Dates :</label><br><br>
            <input type="text" name="f_dates" value="<?= $ligne_formation['f_dates']; ?>"><br><br>

            <label for="f_description">Description :</label><br><br>
            <input type="text" name="f_description" value="<?= $ligne_formation['f_description']; ?>"><br><br>

            <input hidden name="id_formation" value="<?= $ligne_formation['id_formation']; ?>">

            <input type="submit" value="Mettre à jour">
        </form>
    </body>
</html>
