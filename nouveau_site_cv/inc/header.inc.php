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

  // si tous les champs sont correctement renseignés
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
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sara Fkaier - Site CV</title>

    <!-- Mon style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>
