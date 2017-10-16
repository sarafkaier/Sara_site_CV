<?php
require 'connexion.php';
?>

<?php
$msg = '';

// gestion des contenus de la BDD compétences


// insertion d'une compétence
if (isset($_POST['loisir'])) { // Si on a posté une nouvelle comp.
    if (!empty($_POST['loisir'])) { // Si compétence n'est pas vide
        $loisir = addslashes($_POST['loisir']);
        $pdo -> exec("INSERT INTO t_loisirs VALUES (NULL, '$loisir', '1')"); // mettre $id_utilisateur quand on l'aura dans la variable de session
        header("location: loisirs.php");
        exit();

    } // ferme le if n'est pas vide
    else {
        $msg .= '<p style="background:#6A0000; color:white; width:48%">Veuillez renseigner le champs !</p>';
    }

} // ferme le if(isset) du form


// Suppression d'une compétence
if (isset($_GET['id_loisir'])) { // on récupère la comp. par son id dans l'url
    $efface =  $_GET['id_loisir'];

    $resultat = "DELETE FROM t_loisirs WHERE id_loisir = '$efface'";
    $pdo -> query($resultat); // on peut avec exec aussi si on veut
    header("location: loisirs.php"); // pour revenir sur la page

} // ferme le if(isset)

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php
        $resultat = $pdo -> query("SELECT * FROM t_utilisateurs WHERE id_utilisateur = '1'");
        $ligne_utilisateur = $resultat -> fetch();
        ?>
        <title>Admin : <?= ($ligne_utilisateur['pseudo']); ?></title>
        <link rel="stylesheet" href="css/style_admin.css">
        <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
    </head>
    <body>
        <h1>Admin : <?= ($ligne_utilisateur['prenom']); ?></h1>
        <hr>
        <?php
        $resultat = $pdo -> prepare("SELECT * FROM t_loisirs WHERE utilisateur_id ='1'");
        $resultat->execute();
        $nbr_loisirs = $resultat->rowCount();

        // $ligne_competence = $resultat -> fetch();
        ?>
        <div class="conteneur">

            <h2 class="titre">Les loisirs :</h2>
            <p class="loisir"><b>J'ai <?= $nbr_loisirs;?> loisir<?= ($nbr_loisirs>1)?'s':''?></p>

                <table class="table2" border="2">
                    <tr>
                        <th>Loisirs</th>
                        <th>Suppression</th>
                        <th>Modification</th>
                    </tr>

                    <tr>
                        <?php while ($ligne_loisir = $resultat -> fetch()) { ?>
                            <td><?= $ligne_loisir['loisir'];?></td>
                            <td><a href="loisirs.php?id_loisir=<?= $ligne_loisir['id_loisir'];?>">Supprimer</a></td>
                            <td><a href="modif_loisir.php?id_loisir=<?= $ligne_loisir['id_loisir'];?>">Modifier</a></td>
                    </tr>
                        <?php } ?>

                </table><br>

        </div>

        <hr>

        <h2 class="titre2">Insertion d'un loisirs :</h2>

        <form action="loisirs.php" method="post">
            <fieldset>
                <legend>Loisirs</legend><br>
            <?= $msg; ?>
            <input type="text" name="loisir" id="loisir" placeholder="Insérer un loisir"><br><br>

            <input type="submit" value="Insérez">

            </fieldset>
        </form>

    </body>
</html>
