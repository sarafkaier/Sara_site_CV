<?php
include 'inc/header.inc.php';
require('inc/Contact.class.php');

// on vérifie que le formulaire a été posté
if (!empty($_POST)) {
  // on éclate le $_POST en tableau qui permet d'accéder directement au champs par des variables
  extract($_POST);

  // on effectue une validation des données du formulaire et on vérifie la validité de l'email
  $valid = (empty($nom) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($sujet) || empty($message)) ? false : true; // écriture ternaire pour if / else

  $erreurnom = (empty($nom)) ? 'Indiquez votre nom' : null;
  $erreuremail = (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) ? 'Entrez un email valide' : null;
  $erreursujet = (empty($sujet)) ? 'Indiquez un sujet' : null;
  $erreurmessage = (empty($message)) ? 'Parlez donc !!' : null;

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

	<link rel="stylesheet" href="css/contact.css">
  <div class="bg_anim"></div>
	<h1>Contactez moi</h1>
	<div class="info"><p><i class="fa fa-smile-o fa-5x"  aria-hidden="true"></i></p></a></div>

	<form action="contact.php" method="post">

    <h2>Un projet ? Mon profil vous intéresse ? N'hésitez pas à me contacter !</h2>
		<div class="contentform">
			<div id="sendmessage"> Votre message a bien été envoyé ! Merci </div>

			<div class="leftcontact">
				<div class="form-group">
          <p class="php"><?php if (isset($erreurnom)) echo $erreurnom; ?></p>
					<p>Nom<span>*</span></p>
					<span class="icon-case"><i class="fa fa-male"></i></span>
					<input type="text" name="nom" id="nom" value="<?php if(isset($nom)) echo $nom; ?>"/>
					<div class="validation"></div>
				</div>

				<div class="form-group">
					<p>Prénom</p>
					<span class="icon-case"><i class="fa fa-user"></i></span>
					<input type="text" name="prenom" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
					<div class="validation"></div>
				</div>

				<div class="form-group">
          <p class="php"><?php if (isset($erreuremail)) echo $erreuremail; ?></p>
					<p>E-mail <span>*</span></p>
					<span class="icon-case"><i class="fa fa-envelope-o"></i></span>
					<input type="email" id="email" name="email" value="<?php if (isset($email)) echo $email; ?>"/>
					<div class="validation"></div>
				</div>
			</div>

			<div class="rightcontact">
				<div class="form-group">
          <p class="php"><?php if (isset($erreursujet)) echo $erreursujet; ?></p>
					<p>Sujet <span>*</span></p>
					<span class="icon-case"><i class="fa fa-commenting-o"></i></span>
					<input type="text" id="sujet" name="sujet" value="<?php if (isset($sujet)) echo $sujet; ?>"/>
					<div class="validation"></div>
				</div>

				<div class="form-group">
          <p class="php"><?php if (isset($erreurmessage)) echo $erreurmessage; ?></p>
					<p>Message <span>*</span></p>
					<span class="icon-case"><i class="fa fa-comments-o"></i></span>
					<textarea name="message" rows="14" data-rule="required"><?php if (isset($message)) echo $message; ?></textarea>
					<div class="validation"></div>
				</div>
			</div>
		</div>
		<button type="submit" class="bouton-contact">Envoyer</button>
	</form>

<?php require('inc/footer.inc.php'); ?>
