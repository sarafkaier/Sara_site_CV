<?php
require 'connexion.php';
?>

<?php
$msg = '';

// gestion des contenus de la BDD compétences


//insertion d'une formation
if (isset($_POST['f_titre'])) { // Si on a posté une nouvelle comp.
    if (!empty($_POST['f_titre'])) { // Si compétence n'est pas vide
        $formation = addslashes($_POST['f_titre']);
        $pdo -> exec("INSERT INTO t_formations VALUES (NULL, '$formation', '1')"); // mettre $id_utilisateur quand on l'aura dans la variable de session
        header("location: formations.php");
        exit();

    } // ferme le if n'est pas vide
    else {
        $msg .= '<p style="background:#6A0000; color:white; width:48%">Veuillez renseigner le champs !</p>';
    }

} // ferme le if(isset) du form

// Suppression d'un loisir
if (isset($_GET['id_formation'])) { // on récupère la comp. par son id dans l'url
    $efface =  $_GET['id_formation'];

    $resultat = "DELETE FROM t_formations WHERE id_formation = '$efface'";
    $pdo -> query($resultat); // on peut avec exec aussi si on veut
    header("location: formations.php"); // pour revenir sur la page

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

        <link rel="stylesheet" href="css/style_admin.css">

        <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
    </head>
    <body>
        <?php
        $resultat = $pdo -> prepare("SELECT * FROM t_formation WHERE utilisateur_id ='1'");
        $resultat->execute();
        $nbr_formations = $resultat->rowCount();

        // $ligne_competence = $resultat -> fetch();
?>
<?php include('inc/nav.inc.php'); ?>
<div class="container">
    <div class="page-header">
        <h1>Admin : <?= ($ligne_utilisateur['prenom']); ?></h1>
    </div>
    <!-- Fil d'ariane -->
    <ol class="breadcrumb">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="#">Parcours</a></li>
        <li class="active">Formation</li>
    </ol>
    <div class="row">
        <div class="col-md-8">
            <h2>Les formations :</h2>
            <h4 class="well">J'ai <?= $nbr_formations;?> formation<?= ($nbr_formations>1)?'s':''?></h4>
        </div>
        <div class="row">
            <div class="col-md-8">
                <table border="2" class="table table-condensed table-hover">
                    <tr>
                        <th>Formations</th>
                        <th>Suppression</th>
                        <th>Modification</th>
                    </tr>
                    <tr>
                        <?php while ($ligne_formation = $resultat -> fetch()) { ?>
                            <td><?= $ligne_formation['formation'];?></td>
                            <td><a href="formations.php?id_formation=<?= $ligne_formation['id_formation'];?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>
                            <td><a href="modif_formation.php?id_formation=<?= $ligne_formation['id_formation'];?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a></td>
                    </tr>
                        <?php } ?>
                    </table>
            </div>
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-body">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div>Insertion d'une formation :</div>
                        </div>
                    </div>
                        <form action="formations.php" method="post">
                            <fieldset>
                                <?= $msg; ?>
                                <div class="form-group">
                                    <label for="disabledSelect">Formation</label>
                                    <input type="text" name="formation" id="formation" placeholder="Insérer une formation" class="form-control">
                                </div>

                                <input type="submit" class="btn btn-primary" value="Insérez">

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<?php include('inc/footer.inc.php'); ?>
