<?php
require('inc/init.inc.php');

$resultat = $pdo -> query("SELECT * FROM t_utilisateurs WHERE id_utilisateur = '1'");
$ligne_utilisateur = $resultat -> fetch(PDO::FETCH_ASSOC);

// Suppression d'un loisir
if (isset($_GET['id_formation'])) { // on récupère la comp. par son id dans l'url
    $efface =  $_GET['id_formation'];

    $resultat = "DELETE FROM t_formations WHERE id_formation = '$efface'";
    $pdo -> query($resultat); // on peut avec exec aussi si on veut
    header("location: formations.php"); // pour revenir sur la page

} // ferme le if(isset)

include('inc/nav.inc.php');
?>

<!DOCTYPE html>
<html>
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

<div class="container-fluid">
    <div class="row">
        <h1><?= $ligne_utilisateur['prenom']?></h1><br>
        <!-- <h2>Admin Baba</h2> -->
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <p>Profil de l'utilisateur</p>
                </div>
                <div class="container-fluid">

                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Pseudo</th>
                            <th>Age</th>
                            <th>Date de naissance</th>
                            <th>Civilité</th>
                            <th>Adresse</th>
                            <th>Code postal</th>
                            <th>Ville</th>
                            <th>Pays</th>
                            <th>Avatar</th>
                            <th>Modifier</th>
                        </tr>
                        <tr>

                           <td><?php echo $ligne_utilisateur['prenom'] ;?></td>
                           <td><?php echo $ligne_utilisateur['nom'] ;?></td>
                           <td><?php echo $ligne_utilisateur['email'] ;?></td>
                           <td><?php echo $ligne_utilisateur['telephone'] ;?></td>
                           <td><?php echo $ligne_utilisateur['pseudo'] ;?></td>
                           <td><?php echo $ligne_utilisateur['age'] ;?></td>
                           <td><?php echo $ligne_utilisateur['date_naissance'] ;?></td>
                           <td><?php echo $ligne_utilisateur['sexe'] ;?></td>
                           <td><?php echo $ligne_utilisateur['adresse'] ;?></td>
                           <td><?php echo $ligne_utilisateur['code_postal'] ;?></td>
                           <td><?php echo $ligne_utilisateur['ville'] ;?></td>
                           <td><?php echo $ligne_utilisateur['pays'] ;?></td>
                           <td><?php echo $ligne_utilisateur['avatar'] ;?></td>
                           <td><a href="modif_utilisateur.php?id_utilisateur=<?= $ligne_utilisateur['id_utilisateur']; ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a></td>
                       </tr>


                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
  </body>
  </html>
  <?php include('inc/footer.inc.php'); ?>
