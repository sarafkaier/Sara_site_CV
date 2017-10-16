<?php
require 'connexion.php';
?>

<?php
$msg = '';

// gestion des contenus de la BDD compétences


// insertion d'une compétence
if (isset($_POST['competence'])) { // Si on a posté une nouvelle comp.
    if (!empty($_POST['competence']) && !empty($_POST['c_niveau'])) { // Si compétence n'est pas vide
        $competence = addslashes($_POST['competence']);
        $c_niveau = addslashes($_POST['c_niveau']);
        $pdo -> exec("INSERT INTO t_competences VALUES (NULL, '$competence', '$c_niveau', '1')"); // mettre $id_utilisateur quand on l'aura dans la variable de session
        header("location: competence.php");
        exit();

    } // ferme le if n'est pas vide
    else {
        $msg .= '<p style="padding:5px; background:#6A0000; color:white; width:12%">Veuillez renseigner les champs !</p>';
    }

} // ferme le if(isset) du form


// Suppression d'une compétence
if (isset($_GET['id_competence'])) { // on récupère la comp. par son id dans l'url
    $efface =  $_GET['id_competence'];

    $resultat = "DELETE FROM t_competences WHERE id_competence = '$efface'";
    $pdo -> query($resultat); // on peut avec exec aussi si on veut
    header("location: competence.php"); // pour revenir sur la page

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
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">

    <link rel="stylesheet" href="css/style_admin.css">
</head>
<body>
    <h1>Admin : <?= ($ligne_utilisateur['prenom']); ?></h1>
    <hr>
    <?php
    $resultat = $pdo -> prepare("SELECT * FROM t_competences WHERE utilisateur_id ='1'");
    $resultat->execute();
    $nbr_competences = $resultat->rowCount();

    // $ligne_competence = $resultat -> fetch();
    ?>
    <div class="conteneur">

            <div class="col-md-12">
                <h2>Les compétences :</h2>
            <div class="row">
                <h4>J'ai <?= $nbr_competences;?> compétence<?= ($nbr_competences>1)?'s':''?></h4>
            </div>
        </div>

        <div class="row">

            <table border="2">
                <tr>
                    <th>Compétences</th>
                    <th>Niveau en %</th>
                    <th>Suppression</th>
                    <th>Modification</th>
                </tr>

                <tr>
                    <?php while ($ligne_competence = $resultat -> fetch()) { ?>
                        <td><?= $ligne_competence['competence'];?></td>
                        <td><?= $ligne_competence['c_niveau'];?></td>
                        <td><a href="competence.php?id_competence=<?= $ligne_competence['id_competence'];?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>
                        <td><a href="modif_competence.php?id_competence=<?= $ligne_competence['id_competence'];?>">Modifier</a></td>
                    </tr>
                <?php } ?>

            </table><br>

        </div>
    </div>

        <hr>

        <h2 class="titre">Insertion d'une compétence :</h2>

        <form action="competence.php" method="post">
            <fieldset>
                <legend>Compétence</legend><br>
                <?= $msg; ?>
                <input type="text" name="competence" id="competence" placeholder="Insérer une compétence"><br><br>

                <input type="text" name="c_niveau" id="c_niveau" placeholder="Insérer le niveau"><br><br>

                <input type="submit" value="Insérez">

            </fieldset>
        </form>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

    </body>
    </html>
