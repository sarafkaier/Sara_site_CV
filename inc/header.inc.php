<?php
require('Contact.class.php');
// on vérifir que le formulaire a été posté
if (!empty($_POST)) {
  // on éclate le $_POST en tableau qui permet d'accéder directement au champs par des variables
  extract($_POST);

  // on effectue une validation des données du formulaire et on vérifie la validité de l'email
  $valid = (empty($nom) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($sujet) || empty($message)) ? false : true; // écriture ternaire pour if / else

  $erreurnom = (empty($nom)) ? 'Indiquez votre nom' : null;
  $erreuremail = (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) ? 'Entrez un email valide' : null;
  $erreursujet = (empty($sujet)) ? 'Indiquez un sujet' : null;
  $erreurmessage = (empty($message)) ? 'Parlez donc !!' : null;

  $valid = ($valid) ? 'Votre message à bien été envoyé !' : null;

  // si tous les champs correctement renseignés
  if ($valid) {
    // on crée un nouvel objet (ou une instance) de la class Contact.class.php
    $contact = new Contact();
    // on utilise la méthode insertContact pour insérez en BDD
    $contact->insertContact($nom, $email, $sujet, $message);
  }
}
// on utilise la méthode sendMail de la classe Contact.class.php
//$contact->sendEmail($sujet, $email, $message);
// on efface les valeurs du formulaires
unset($nom);
unset($sujet);
unset($message);
unset($email);
unset($contact);
// on créé une variable de succès
$success = 'Message envoyé !';
?>

<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="Intégratrice / développeuse web en recherche de stage">
        <meta name="author" content="">

        <title>site CV - Sara</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

        <link href="css/resume.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>
