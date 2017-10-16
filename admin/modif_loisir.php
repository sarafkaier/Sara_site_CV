<?php
require 'connexion.php';

// mise à jour d'un loisir
if (isset($_POST['loisir'])) { // par le nom du premier input
    $loisir = addslashes($_POST['loisir']);
    $id_loisir = $_POST['id_loisir'];

    $pdo -> exec("UPDATE t_loisirs SET loisir = '$loisir' WHERE id_loisir = '$id_loisir'");
    header('location: loisirs.php');
    exit();
}

// je récupère le loisir :
$id_loisir = $_GET['id_loisir']; // par l'id et $_GET
$resultat = $pdo -> query("SELECT * FROM t_loisirs WHERE id_loisir ='$id_loisir'"); // la requête est égale à l'id
$ligne_loisir = $resultat->fetch();

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
        <h2>Modification d'un loisir</h2>
        <p><b><?= $ligne_loisir['loisir']; ?></p>

        <form action="modif_loisir.php" method="post">

            <label for="loisir">Loisir :</label><br><br>
            <input type="text" name="loisir" value="<?= $ligne_loisir['loisir']; ?>"><br><br>

            <input hidden name="id_loisir" value="<?= $ligne_loisir['id_loisir']; ?>">

            <input type="submit" value="Mettre à jour">
        </form>
    </body>
</html>
