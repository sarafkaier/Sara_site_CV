<?php
require 'connexion.php';

// mise à jour d'une compétence
if (isset($_POST['prenom'])) { // par le nom du premier input
    $id_utilisateur = $_POST['id_utilisateur'];
    $prenom = addslashes($_POST['prenom']);
    $nom = addslashes($_POST['nom']);
    $email = addslashes($_POST['email']);
    $telephone = addslashes($_POST['telephone']);
    $pseudo = addslashes($_POST['pseudo']);
    $age = addslashes($_POST['age']);
    $adresse = addslashes($_POST['adresse']);
    $code_postal = addslashes($_POST['code_postal']);
    $ville = addslashes($_POST['ville']);
    $pays = addslashes($_POST['pays']);

    $pdo -> exec("UPDATE t_utilisateurs SET prenom = '$prenom', nom ='$nom', email ='$email', telephone ='$telephone', pseudo='$pseudo', age='$age', adresse='$adresse', code_postal='$code_postal', ville='$ville', pays='$pays' WHERE id_utilisateur = '$id_utilisateur'"); // SQL OK
    header('location: utilisateur.php');
    exit();
}

// je récupère la formation :
$id_utilisateur = $_GET['id_utilisateur']; // par l'id et $_GET
$resultat = $pdo -> query("SELECT * FROM t_utilisateurs WHERE id_utilisateur ='$id_utilisateur'"); // la requête est égale à m'id
$ligne_utilisateur = $resultat->fetch();

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
    </head>
    <body>
        <h1>Admin : <?= $ligne_utilisateur['prenom']; ?></h1>
        <p>texte</p>
        <hr>
        <h2>Modification d'un utilisateur</h2>
        <p><b><?= $ligne_utilisateur['prenom']; ?></p>

        <form action="modif_utilisateur.php" method="post">

            <label for="prenom">Prenom :</label><br><br>
            <input type="text" name="prenom" value="<?= $ligne_utilisateur['prenom']; ?>"><br><br>

            <label for="Nom">Nom :</label><br><br>
            <input type="text" name="nom" value="<?= $ligne_utilisateur['nom']; ?>"><br><br>

            <label for="email">Email :</label><br><br>
            <input type="text" name="email" value="<?= $ligne_utilisateur['email']; ?>"><br><br>

            <label for="telephone">Téléphone :</label><br><br>
            <input type="number" name="telephone" value="<?= $ligne_utilisateur['telephone']; ?>"><br><br>

            <label for="pseudo">Pseudo :</label><br><br>
            <input type="text" name="pseudo" value="<?= $ligne_utilisateur['pseudo']; ?>"><br><br>

            <label for="age">Age :</label><br><br>
            <input type="number" name="age" value="<?= $ligne_utilisateur['age']; ?>"><br><br>

            <label for="adresse">Adresse :</label><br><br>
            <input type="text" name="adresse" value="<?= $ligne_utilisateur['adresse']; ?>"><br><br>

            <label for="code_postal">Code postal :</label><br><br>
            <input type="number" name="code_postal" value="<?= $ligne_utilisateur['code_postal']; ?>"><br><br>

            <label for="ville">Ville :</label><br><br>
            <input type="text" name="ville" value="<?= $ligne_utilisateur['ville']; ?>"><br><br>

            <label for="pays">Pays :</label><br><br>
            <input type="text" name="pays" value="<?= $ligne_utilisateur['pays']; ?>"><br><br>

            <input hidden name="id_utilisateur" value="<?= $ligne_utilisateur['id_utilisateur']; ?>">

            <input type="submit" value="Mettre à jour">
        </form>
    </body>
</html>
