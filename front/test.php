<?php //require 'inc/header.inc.php'; ?>
<link rel="stylesheet" href="css/test.css">
<nav>
  <ul>
    <li><a href="#1">Accueil</a></li>
    <li><a href="#2">Compétences</a></li>
    <li><a href="#3">Réalisations</a></li>
    <li><a href="#4">Formation & Experiences</a></li>
    <li><a href="#5">Contact</a></li>
  </nav>
</div>
<div class="slides">
  <div class="slide" id="1">
    <div class="content">
      <div class='row'>
        <div class='col-sm-12 col-xs-12 texte'>
          <h1 class="bg-clip">Sara FKAIER</h1>
          <h1><span id="holder"></span><span class="blinking-cursor">|</span></h1>
        </div>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, odit nihil tempora tenetur! Fugit reprehenderit saepe impedit at, expedita nemo nulla hic quia placeat ipsum sint, quis unde fugiat tenetur nobis illum. Nemo laboriosam laudantium aliquam illum fugiat incidunt nostrum, corrupti minus optio. Suscipit obcaecati harum voluptates est quod quasi?</p>
    </div>
    <div class="bg_anim"></div>
  </div>
  <div class="slide" id="2">
    <div class="content">
      <h1>Slide 2</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, odit nihil tempora tenetur! Fugit reprehenderit saepe impedit at, expedita nemo nulla hic quia placeat ipsum sint, quis unde fugiat tenetur nobis illum. Nemo laboriosam laudantium aliquam illum fugiat incidunt nostrum, corrupti minus optio. Suscipit obcaecati harum voluptates est quod quasi?</p>
    </div>
  </div>
  <div class="slide" id="3">
    <div class="content">
        <link rel="stylesheet" href="css/competence_realisation.css">
      <p><h1>Réalisations :</h1>
      <section class="awSlider">

        <div class="container">
          <div class="row" id="work">
            <div class="col-md-6 work-item">
              <div class="itemInfo fontJosefin">
                <p>titre:<br><span class="fontLora">Site CV</span></p>
                <p>story:<br><span class="fontLora">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate aliquet sollicitudin.</span></p>
                <p>tools:<br><span class="fontLora">lorem, ipsum, dolor</span></p>
              </div>
              <div class="item">
                <img src="img/01.png" class="pcIcon img-fluid mx-auto d-block">
                <p class="fontJosefin projectTitle text-center mx-auto">projet:<br><span class="fontLora">Site CV</span></p>
                <a class="link" href="#"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
              </div>
            </div>

            <div class="col-md-6 work-item">
              <div class="itemInfo fontJosefin">
                <p>titre:<br><span class="fontLora">Site Annonceo</span></p>
                <p>story:<br><span class="fontLora">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate aliquet sollicitudin.</span></p>
                <p>tools:<br><span class="fontLora">lorem, ipsum, dolor</span></p>
              </div>
              <div class="item">
                <img src="img/02.jpg" class="pcIcon img-fluid mx-auto d-block">
                <p class="fontJosefin projectTitle text-center mx-auto">projet:<br><span class="fontLora">Site Annonceo</span></p>
                <a class="link" href="#"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3 work-item">
              <div class="itemInfo fontJosefin">
                <p>titre:<br><span class="fontLora">Site HTML / CSS</span></p>
                <p>story:<br><span class="fontLora">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate aliquet sollicitudin.</span></p>
                <p>tools:<br><span class="fontLora">lorem, ipsum, dolor</span></p>
              </div>
              <div class="item">
                <img src="img/03.png" class="pcIcon img-fluid mx-auto d-block">
                <p class="fontJosefin projectTitle text-center mx-auto">projet:<br><span class="fontLora">Site HTML / CSS</span></p>
                <a class="link" href="#"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section></p>
    </div>
  </div>
  <div class="slide" id="4">
    <div class="content">
      <h1>Slide 4</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, odit nihil tempora tenetur! Fugit reprehenderit saepe impedit at, expedita nemo nulla hic quia placeat ipsum sint, quis unde fugiat tenetur nobis illum. Nemo laboriosam laudantium aliquam illum fugiat incidunt nostrum, corrupti minus optio. Suscipit obcaecati harum voluptates est quod quasi?</p>
    </div>
  </div>
  <div class="slide" id="5">
    <div class="content">
      <p><link rel="stylesheet" href="css/contact.css">
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
    	</form></p>
    </div>
  </div>
</div>
<?php require 'inc/footer.inc.php'; ?>
<script type="text/javascript" src="js/test.js"></script>
