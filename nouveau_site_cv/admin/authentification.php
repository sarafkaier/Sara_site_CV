<?php
require_once('inc/init.inc.php');

// Traitement pour la déconnexion
if (isset($_GET['deconnexion'])) {

  $_SESSION['connexion']=''; // on vide les variables de session
  $_SESSION['id_utilisateur']=''; // on vide les variables de session
  $_SESSION['prenom']=''; // on vide les variables de session
  $_SESSION['nom']=''; // on vide les variables de session

  unset($_SESSION['connexion']);
  session_destroy();
  header('location: authentification.php');
}

// Traitement pour la connexion
if(isset($_POST['connexion'])) {

  $pseudo = addslashes($_POST['pseudo']);
  $mdp = addslashes($_POST['mdp']);
  $sql = $pdo -> prepare("SELECT * FROM t_utilisateurs WHERE pseudo='$pseudo' AND mdp='$mdp'"); // on vérifie pseudo ET mot de passe
  $sql -> execute();
  $nbr_utilisateur = $sql -> rowCount(); // on compte s'il est dans la table, le compte répond 1 s'il y est, 0 s'il n'y est pas

  if ($nbr_utilisateur == 0) { // il n'y est pas
    $msg .= '<div class="alert alert-danger">Erreur d\'authentification !</div>';
  }
  else {
    $ligne_utilisateur = $sql -> fetch();

    $_SESSION['connexion'] = 'connecté';
    $_SESSION['id_utilisateur'] = $ligne_utilisateur['id_utilisateur'];
    $_SESSION['prenom'] = $ligne_utilisateur['prenom'];
    $_SESSION['nom'] = $ligne_utilisateur['nom'];

    header('location:index.php');
  }
}

$page = 'Connexion';
?>

<nav class="navbar navbar-default couleur"><a class="lead" href="../index.php"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Site CV</a></nav>

<!-- Contenu HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Authentification</title>
  <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style_admin.css">

  <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
</head>
<body>
  <h1 class="well">Authentification</h1>
  <div class="container">
    <div class="row">
      <?= $msg ?>
      <form method="post" action="">
        <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6 col-sm-offset-1">
          <div class="panel panel-default">
            <div class="panel-body" id="connexion">
              <div class="form-group">
                <input type="text" class="form-control" name="pseudo" placeholder="Pseudo">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
              </div>
              <input type="submit" name="connexion" class="btn btn-danger btn-block couleur" value="Connexion">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div><!-- /.container -->
  <?php include('inc/footer.inc.php'); ?>
</body>
</html>
