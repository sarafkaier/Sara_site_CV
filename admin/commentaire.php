<?php
require('inc/init.inc.php');
if (isset($_SESSION['connexion']) && $_SESSION['connexion'] == 'connecté') { // A mettre sur toutes les pages
  $id_utilisateur = $_SESSION['id_utilisateur'];
  $prenom = $_SESSION['prenom'];
  $nom = $_SESSION['nom'];
  // echo $_SESSION['connexion'];
} else { // l'utilisateur n'est pas connecté
  header('location: authentification.php');
}
$sql = $pdo->prepare("SELECT * FROM t_commentaires ORDER BY id_commentaire DESC");
$nbr_commentaires = $sql->rowCount();
if(isset($_GET['id_commentaire'])) { // on récupère le loisir. par son id dans l'url
    $efface = $_GET['id_commentaire']; //  je mets cela dans une variable
    $sqlDelete = (" DELETE FROM t_commentaires WHERE id_commentaire = '$efface'");
    $pdo->query($sqlDelete); // on peut avec exec aussi si on veut
    header('location:commentaire.php'); // pour revenir sur la page
} // ferme le if isset
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

  <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">

  <link rel="stylesheet" href="css/style_admin.css">
</head>

<body>
  <?php include('inc/nav.inc.php'); ?>
  <div class="panel panel-default">
    <div class="panel-heading">Vous avez <?=  $nbr_commentaires ?> messages</div>
  </div>
  <div class="container">
    <div class="row">
      <?php while($ligne_commentaires = $sql->fetch()) : ?>
          <div style="margin:30px 110px;padding:40px 0px; background: #F5F5F5;border-radius: 20px;border: 2px solid #FFCDCD;">
              <div class="col-md-4">
                <ul class="list-group">
                  <li class="list-group-item">
                      <?= '<b>Message n° <span class="badge">' . $ligne_commentaires['id_commentaire'] . '</span></b>' ?>
                  </li>
                  <li class="list-group-item">
                      <?= '<b>Nom : </b><span class="badge">' . $ligne_commentaires['nom'] . '</span>' ?>
                  </li>
                  <li class="list-group-item">
                      <?= '<b>Sujet : </b><span class="badge">' . $ligne_commentaires['sujet'] . '</span>'  ?>
                  </li>
                  <li class="list-group-item">
                      <?= '<b>Message : </b><span class="badge">' . $ligne_commentaires['message'] . '</span>'  ?>
                  </li>
                  <li class="list-group-item">
                      <?= '<b>Email : </b><span class="badge">' . $ligne_commentaires['email'] . '</span>'  ?>
                  </li>
                  <a id="supr-comment" href="commentaire.php?id_commentaire=<?= $ligne_commentaires['id_commentaire']; ?>">
                    <li class="list-group-item list-group-item-danger text-center hoover-comment">
                      <b>Supprimer le message</b>
                    </li>
                  </a>
                </ul>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4 ">
                    <ul class="list-group">
                        <li class="list-group-item active msg" style="box-sizing:border-box; background:#FFCDCD; border: 2px solid #FFCDCD; color:white;">
                            <?= '<i>Message de :</i><b> ' . $ligne_commentaires['nom'] . '</b><br><br><span class="badge">' .  $ligne_commentaires['message'] .'</span> <br>' ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endwhile ?>
  </div>
</div>
<?php require('inc/footer.inc.php'); ?>
