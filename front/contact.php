<?php include 'inc/header.inc.php'; ?>

	<link rel="stylesheet" href="css/contact.css">

	<h1>Contactez moi</h1>
	<div class="info"><p><i class="fa fa-smile-o fa-5x"  aria-hidden="true"></i></p></a></div>

	<form>
		<h2>Un projet ? Mon profil vous intéresse ? N'hésitez pas à me contacter !</h2>

		<div class="contentform">
			<div id="sendmessage"> Votre message a bien été envoyé ! Merci </div>

			<div class="leftcontact">
				<div class="form-group">
					<p>Nom<span>*</span></p>
					<span class="icon-case"><i class="fa fa-male"></i></span>
					<input type="text" name="nom" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
					<div class="validation"></div>
				</div>

				<div class="form-group">
					<p>Prénom <span>*</span></p>
					<span class="icon-case"><i class="fa fa-user"></i></span>
					<input type="text" name="prenom" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
					<div class="validation"></div>
				</div>

				<div class="form-group">
					<p>E-mail <span>*</span></p>
					<span class="icon-case"><i class="fa fa-envelope-o"></i></span>
					<input type="email" name="email" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
					<div class="validation"></div>
				</div>
			</div>

			<div class="rightcontact">
				<div class="form-group">
					<p>Numéro de téléphone <span>*</span></p>
					<span class="icon-case"><i class="fa fa-phone"></i></span>
					<input type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
					<div class="validation"></div>
				</div>

				<div class="form-group">
					<p>Message <span>*</span></p>
					<span class="icon-case"><i class="fa fa-comments-o"></i></span>
					<textarea name="message" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
					<div class="validation"></div>
				</div>
			</div>
		</div>
		<button type="submit" class="bouton-contact">Envoyer</button>
	</form>

<?php require('inc/footer.inc.php'); ?>
