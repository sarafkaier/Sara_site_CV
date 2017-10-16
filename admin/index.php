<?php
require 'connexion.php';
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <?php
    $resultat = $pdo -> query("SELECT * FROM t_utilisateurs WHERE id_utilisateur = '1'");
    $ligne_utilisateur = $resultat -> fetch();
    ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin : <?= ($ligne_utilisateur['pseudo']); ?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <!-- Navbar bootstrap -->
      <nav class="navbar navbar-inverse">
          <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php"><?= ($ligne_utilisateur['pseudo']); ?></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                      <li class="active"><a href="utilisateur.php">Mon profil<span class="sr-only">(current)</span></a></li>
                      <li><a href="#">Lien</a></li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Parcours<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="experiences.php">Expériences</a></li>
                              <li><a href="realisations.php">Réalisations</a></li>
                              <li><a href="formations.php">Formation</a></li>
                              <li><a href="competence.php">Compétences</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Liens</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Autres liens</a></li>
                          </ul>
                      </li>
                  </ul>
                  <form class="navbar-form navbar-left">
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Recherche">
                      </div>
                      <button type="submit" class="btn btn-default">Envoyer</button>
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Lien</a></li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu déroulant<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                          </ul>
                      </li>
                  </ul>
              </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
      </nav>
      <h1>Admin : <?= ($ligne_utilisateur['prenom']); ?></h1>
      <hr>
      <h2>Accueil admin</h2>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
