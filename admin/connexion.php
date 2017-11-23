<?php
require_once('inc/init.inc.php');

// Traitement pour la déconnexion :
if(isset($_GET['action']) && $_GET['action'] == 'deconnexion'){ // Si une action est demandée dans l'url et que cette action est "deconnexion" alors on procède à la deconnexion.
    unset($_SESSION['t_utilisateurs']);
    header('location: connexion.php');
}

// Traitement pour rediriger l'utilisateur s'il est déjà connécté
if(userConnecte()){
    header('location:utilisateur.php');
}

// Traitements pour la connexion

// Vérifier que le formulaire n'est pas vide
// Debug() pour vérifier
// On vérifie que les deux champs ne sont pas vides
// On connecte le membre en enregistrant ses infos dans la session
   // -> Le membre existe-t-il en BDD ?
   // -> Le MDP saisi correspond au pseudo en BDD
   // -> Enregistrement en session
   // -> Redirection vers profil

// Vérifier que le formulaire n'est pas vide
if(!empty($_POST)){

    // On vérifie que les deux champs ne sont pas vides
    if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){

        // On connecte le membre en enregistrant ses infos dans la session
        // -> Le membre existe-t-il en BDD ?
        $resultat = $pdo -> prepare("SELECT * FROM t_utilisateurs WHERE pseudo = :pseudo");
        $resultat -> bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
        $resultat -> execute();

        if($resultat -> rowCount() > 0){ // signifie que le pseudo est déja inscrit dans la BDD puisque supérieur à 0 donc pas nul
            // -> Le MDP saisi correspond au pseudo en BDD
            $membre = $resultat -> fetch(PDO::FETCH_ASSOC); // On récupère toutes les infos du membre qui souhaite se connecter sous la forme d'un array
            if($membre['mdp'] == $_POST['mdp']){ // si (mdp_crypte_en_bdd == mdp saisi + crypté... ALORS TOUT EST OK)
                // Tout est OK on peut connecter l'utilisateur
                foreach($membre as $indice => $valeur){
                    if($indice != 'mdp'){
                        $_SESSION['t_utilisateurs'][$indice] = $valeur;
                    }
                }
                // redirection
                header('location:utilisateur.php');
            }
            else{
                $msg .= '<div class="alert alert-danger">Mot de passe erroné !</div>';
            }
        }
        else{
            $msg .= '<div class="alert alert-danger"> Le pseudo '. $_POST['pseudo'].' n\'est pas reconnu.</div>';
        }

    }// fin du if de verification si les deux champs ne sont pas vides
    else{
        $msg .= '<div class="alert alert-danger"> Veuillez renseigner un pseudo et un mot de passe !</div>';
    }
} // fin du if (!empty($_POST))

$page = 'Connexion';
?>
<nav class="navbar navbar-default couleur"></nav>

<!-- Contenu HTML -->
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
      <h1 class="well">Connexion</h1>
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
                      <input type="submit" class="btn btn-primary btn-block couleur" value="Connexion">
                    </div>
                  </div>
                </div>
              </form>
        </div>
    </div><!-- /.container -->
<?php
require_once('inc/footer.inc.php');
?>
