<?php
require('inc/init.inc.php');

if (isset($_SESSION['connexion']) && $_SESSION['connexion'] == 'connecté') {

  $id_utilisateur = $_SESSION['id_utilisateur'];
  $prenom = $_SESSION['prenom'];
  $nom = $_SESSION['nom'];

  // echo $_SESSION['connexion'];
} else { // l'utilisateur n'est pas connecté
  header('location: authentification.php');
}

// mise à jour d'une compétence
if (isset($_POST['titre_cv'])) { // par le nom du premier input
    $titre_cv = addslashes($_POST['titre_cv']);
    $accroche = addslashes($_POST['accroche']);
    $logo = addslashes($_POST['logo']);
    $id_titre_cv = $_POST['id_titre_cv'];

    $pdo -> exec("UPDATE t_titre_cv SET titre_cv = '$titre_cv', accroche ='$accroche', logo ='$logo' WHERE id_titre_cv = '$id_titre_cv'");
    header('location: accroche.php');
    exit();
}

// je récupère la compétence :
$id_titre_cv = $_GET['id_titre_cv']; // par l'id et $_GET
$resultat = $pdo -> query("SELECT * FROM t_titre_cv WHERE id_titre_cv ='$id_titre_cv'"); // la requête est égale à m'id
$ligne_accroche = $resultat->fetch();

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
        <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">

        <link rel="stylesheet" href="css/style_admin.css">
    </head>
    <body>
        <h1>Admin : <?= $ligne_utilisateur['prenom']; ?></h1>
        <hr>
        <h2 class="well">Modification d'une accroche</h2><br>
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-warning">
                <div class="panel-body">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div><?= $ligne_accroche['titre_cv']; ?></div>
                        </div>
                    </div>
                      <form action="modif_accroche.php" method="post">

                        <div class="form-group">
                          <label for="titre_cv">Titre :</label><br>
                          <input type="text" name="titre_cv" value="<?= $ligne_accroche['titre_cv']; ?>"><br><br>
                        </div>

                        <div class="form-group">
                          <label for="accroche">Accroche :</label><br>
                          <input type="text" name="accroche" value="<?= $ligne_accroche['accroche']; ?>"><br><br>
                        </div>

                        <div class="form-group">
                          <label for="logo">Logo :</label><br>
                          <input type="text" name="logo" value="<?= $ligne_accroche['logo']; ?>"><br><br>
                        </div>

                        <div class="form-group">
                          <input hidden name="id_titre_cv" value="<?= $ligne_accroche['id_titre_cv']; ?>">
                        </div>

                          <input type="submit" class="btn btn-warning" value="Mettre à jour">
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php include('inc/footer.inc.php'); ?>
