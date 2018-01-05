<?php
// require 'connexion.php';
require('inc/init.inc.php');

if (isset($_SESSION['connexion']) && $_SESSION['connexion'] == 'connecté') {

  $id_utilisateur = $_SESSION['id_utilisateur'];
  $prenom = $_SESSION['prenom'];
  $nom = $_SESSION['nom'];

  // echo $_SESSION['connexion'];
} else { // l'utilisateur n'est pas connecté
  header('location: authentification.php');
}
?>

<?php
$msg = '';

// gestion des contenus de la BDD compétences

//insertion d'une formation
if (isset($_POST['t_titre_cv'])) { // Si on a posté une nouvelle form.
    if ($_POST['t_titre_cv']!='' && $_POST['accroche']!='' && $_POST['logo']!='') {
      $t_titre_cv = addslashes($_POST['t_titre_cv']);
      $accroche = addslashes($_POST['accroche']);
      $logo = addslashes($_POST['logo']);

      $pdo -> exec("INSERT INTO t_titre_cv VALUES (NULL, '$t_titre_cv', '$accroche', '$logo', '$id_utilisateur')"); // mettre $id_utilisateur quand on l'aura dans la variable de session
      header("location: accroche.php");
      exit();
    }
    else {
        $msg .= '<p style="background:#6A0000; color:white; width:72%">Veuillez renseigner les champs !</p>';
    }
} // ferme le if(isset) du form

// Suppression d'un loisir
if (isset($_GET['id_titre_cv'])) { // on récupère la comp. par son id dans l'url
    $efface =  $_GET['id_titre_cv'];

    $resultat = "DELETE FROM t_titre_cv WHERE id_titre_cv = '$efface'";
    $pdo -> query($resultat); // on peut avec exec aussi si on veut
    header("location: accroche.php"); // pour revenir sur la page

} // ferme le if(isset)

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <?php
  $resultat = $pdo -> query("SELECT * FROM t_utilisateurs WHERE id_utilisateur = '$id_utilisateur'");
  $ligne_utilisateur = $resultat -> fetch();
  ?>
  <title>Admin : <?= ($ligne_utilisateur['pseudo']); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style_admin.css">

  <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">

  <!--CKEditor-->
  <script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
</head>
<body>
  <?php
  $resultat = $pdo -> prepare("SELECT * FROM t_titre_cv WHERE utilisateur_id ='$id_utilisateur'");
  $resultat->execute();
  $nbr_accroche = $resultat->rowCount();

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
      <li class="active">Accroche</li>
    </ol>
    <div class="row">
      <div class="col-md-8">
        <h2>Mon accroche :</h2>
        <h4 class="well">J'ai <?= $nbr_accroche;?> accroche<?= ($nbr_accroche>1)?'s':''?></h4>
      </div>
      <div class="row">
        <div class="col-md-8">
          <table border="2" class="table table-condensed table-hover">
            <tr>
              <th>Titre du CV</th>
              <th>Accroche</th>
              <th>Logo</th>
              <th>Suppression</th>
              <th>Modification</th>
            </tr>
            <tr>
              <?php while ($ligne_accroche = $resultat -> fetch()) { ?>
                <td><?= $ligne_accroche['titre_cv'];?></td>
                <td><?= $ligne_accroche['accroche'];?></td>
                <td><?= $ligne_accroche['logo'];?></td>
                <td><a href="accroche.php?id_titre_cv=<?= $ligne_accroche['id_titre_cv'];?>"><button type="button" class="btn btn-danger col-md-6 col-md-offset-3"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>
                <td><a href="modif_accroche.php?id_titre_cv=<?= $ligne_accroche['id_titre_cv'];?>"><button type="button" class="btn btn-success col-md-6 col-md-offset-3"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a></td>
              </tr>
            <?php } ?>
          </table>
        </div>
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-body">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <div>Insertion d'une accroche :</div>
                </div>
              </div>
              <form action="accroche.php" method="post">
                <fieldset>
                  <?= $msg; ?>
                  <div class="form-group">
                    <label for="disabledSelect">Titre</label>
                    <input type="text" name="t_titre_cv" id="t_titre_cv" placeholder="Insérer un titre" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="disabledSelect">Accroche</label>
                    <textarea name="accroche" id="editor4" class="form-control" placeholder="Insérer une accroche"></textarea>
                  </div>

                  <!-- <script>CKEDITOR.replace('editor4')</script> -->

                  <div class="form-group">
                    <label for="disabledSelect">Logo</label>
                    <input type="text" name="logo" id="logo" placeholder="Insérer un logo" class="form-control">
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
