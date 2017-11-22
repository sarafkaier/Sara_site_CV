<?php
include('inc/init.inc.php');
// $pdo = new PDO('mysql:host=localhost;dbname=site_cv', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

// Traitement pour la deconnexion :
if(isset($_GET['action']) && $_GET['action'] == 'deconnexion'){ // Si une action est demandé dans l'url... et que cette action est 'déconnexion' alors on procède à la déconnexion.
    unset($_SESSION['t_utilisateurs']);
    header('location:connexion.php');
}

// Traitement pour rediriger l'utilisateur s'il est déjà connecté
if (userConnecte()) {
    header('location:utilisateur.php');
}

$page ='Connexion';

if (!empty($_POST)) {
  //echo "test";
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
//echo "tsest";
        $resultat = $pdo -> prepare("SELECT * FROM t_utilisateurs WHERE mdp = :mdp");
        $resultat -> bindParam(':mdp', $_POST['mdp'], PDO::PARAM_STR);
        $resultat -> execute();

        if ($resultat -> rowCount() > 0) { // ok pour le pseudo existe bien
          //echo "test";
            $membre = $resultat -> fetch(PDO::FETCH_ASSOC); // on récupère toutes les infos du membre qui souhaite se connecter sous la forme d'un ARRAY.

            if ($membre['mdp'] == md5($_POST['mdp'])) {
              echo "test";
                // si (mdp_crypté_en_bdd == mdp saisi + crypté... ALORS TOUT EST OK!!)

                // Tout est OK on peut connecter l'utilisateur

                foreach ($membre as $indice => $valeur) {
                    if ($indice == 'mdp') {
                        $_SESSION['t_utilisateurs'][$indice] = $valeur;
                    }
                }
                // redirection
                header('location:utilisateur.php');
            }
            else {
                $msg .= '<div class="erreur">Mot de passe erronné !</div>';
            }
        }
        else {
            $msg .= '<div class="erreur">Pseudo erronné !</div>';
        }
    }
    else {
        $msg .= '<div class="erreur">Veuillez renseigner un Pseudo et un Mot de passe.</div>';
    }
}

?>

<!-- Contenu HTML -->
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <?php
      $resultat = $pdo -> query("SELECT * FROM t_utilisateurs WHERE id_utilisateur = '1'");
      $ligne_utilisateur = $resultat -> fetch();
      ?>
      <title>Admin : <?= $ligne_utilisateur['pseudo']; ?></title>
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <link href="https://fonts.googleapis.com/css?family=Concert+One"rel="stylesheet">

      <link rel="stylesheet" href="css/style_admin.css">
    </head>
    <body>

      <h1 class="well">Connexion</h1>
      <div class="col-md-4">
          <div class="panel panel-info">
              <div class="panel-body">
                <form action="connexion.php" method="post">

                  <div class="form-group">
                    <label for="pseudo">Pseudo :</label><br>
                    <input type="text" name="pseudo"><br><br>
                  </div>

                  <div class="form-group">
                    <label for="mdp">Mot de passe :</label><br>
                    <input type="password" name="mdp"><br><br>
                  </div>

                  <input type="submit" class="btn btn-info" value="Envoyer">
                </form>
              </div>
          </div>
      </div>
<?php
require_once('inc/footer.inc.php');
?>
