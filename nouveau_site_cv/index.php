<?php
include 'inc/header.inc.php';
include 'inc/init.inc.php';
?>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Sara FKAIER</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item navi">
              <a class="nav-link js-scroll-trigger" href="#services">Compétences</a>
            </li>
            <li class="nav-item navi">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Réalisations</a>
            </li>
            <li class="nav-item navi">
              <a class="nav-link js-scroll-trigger" href="#about">Expériences & formations</a>
            </li>
            <li class="nav-item navi">
              <a class="nav-link js-scroll-trigger" href="#team">Loisirs</a>
            </li>
            <li class="nav-item navi">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="ecart_titre"></div>
          <div class="titre">Sara Fkaier</div>
          <div class="text-uppercase taille">Développeuse / intégratrice <br> web junior</div>
          <div class="ecart"></div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" id="cv" href="CV_sara_fkaier.pdf" target="_blank">Téléchargez mon CV</a>
        </div>
      </div>
    </header>

    <!-- Compétences -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Compétences</h2>
            <h3 class="section-subheading text-muted">Voici les langages que j'utilise.</h3>
            <div class="row-ecart"></div>
          </div>
        </div>
        <div class="col-sm-9 offset-md-2">
          <p>HTML5</p>
          <div class="contenu">
            <div class="skills html">80%</div>
          </div>

          <p>CSS3</p>
          <div class="contenu">
            <div class="skills css">70%</div>
          </div>

          <p>PHP7</p>
          <div class="contenu">
            <div class="skills php">50%</div>
          </div>

          <p>SQL</p>
          <div class="contenu">
            <div class="skills sql">50%</div>
          </div>

          <p>Wordpress</p>
          <div class="contenu">
            <div class="skills wp">45%</div>
          </div>

          <p>JavaScript</p>
          <div class="contenu">
            <div class="skills js">35%</div>
          </div>

          <p>JQuery</p>
          <div class="contenu">
            <div class="skills jq">35%</div>
          </div>
        </div>
    </section>

    <!-- Réalisations -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Réalisations</h2>
            <h3 class="section-subheading text-muted">Les quelques projets que j'ai pu réaliser...</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus-circle fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/site_cv.jpg" alt="image site cv">
            </a>
            <div class="portfolio-caption">
              <h4>Mon site CV</h4>
              <p class="text-muted">Fait avec HTML5, CSS3, JS et bootstrap</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus-circle fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/generaction.jpg" alt="image site génér'action solidaire">
            </a>
            <div class="portfolio-caption">
              <h4>Génér'action solidaire</h4>
              <p class="text-muted">Site fait avec wordpress</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus-circle fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/e_commerce.jpg" alt="image projet e-commerce">
            </a>
            <div class="portfolio-caption">
              <h4>Site E-commerce</h4>
              <p class="text-muted">Site fait avec HTML5, CSS3, PHP7, SQL</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Expériences & formations -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Expériences & formations</h2>
            <h3 class="section-subheading text-muted">Mon parcours professionnel.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/5.jpg" alt="logo webforce3">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading experience">CERTIFICATIONS INTEGRATEUR DEVELOPPEUR WEB </h4>
                    <h4 id="sous-titre">WebForce3 et LePoleS | 2018</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Formation de 10 mois labellisée Grande École du Numérique. <br> Techniques de développement et intégration web et mobile.
                    </p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid fond" src="img/about/6.png" alt="logo diplôme">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading experience">BACCALAURÉAT PROFESSIONNEL </h4>
                    <h4 id="sous-titre">Lycée Saint Éxupéry | 2012</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Bac professionnel secrétariat. <br> Mention assez bien.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="image d'un ordinateur">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading experience">DEVELOPPEUR POUR AUTOJAUNE PARIS</h4>
                    <h4 id="sous-titre">www.autojaunejunior.com | Février - Avril 2018</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Stage de deux mois chez autojaunejunior. <br> Maintenance de la structure du code, du respect des bonnes pratiques (W3C) pour avoir un référencement naturel (SEO) optimisé.
                    </p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/7.jpg" alt="logo solidarité">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading experience">DEVELOPPEUR POUR GENERACTION</h4>
                    <h4 id="sous-titre">generaction-solidaire.fr | Janvier – Février 2018</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Utilisation du CMS WordPress. <br> Sécuriser, optimiser et garantir les performances du site à l'aide des systèmes de cache et le respect des normes. <br> Gestion de projet et relation client.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Loisirs -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Loisirs</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="image livre">
              <h4></h4>
              <p class="text-md-center">La lecture est à l'esprit<br> ce que les aliments<br> sont au corps.</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="image crayon">
              <h4></h4>
              <p class="text-md-center">Prendre un crayon,<br> une feuille et dessiner<br> ce que je vois.</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="image carte pour voyager et jumelles">
              <h4></h4>
              <p class="text-md-center">Le voyage est sans nul doute<br> l'une des expériences<br> les plus enrichissantes qu'il<br> nous est donné de vivre.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Réseaux sociaux -->
    <section class="py-5 couleur">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 offset-md-3">
            <div class="icon-row">
              <a href="https://github.com/sarafkaier" target="_blank">
                <i class="fa fa-github fa-3x logo"></i>
              </a>
              <a href="https://www.linkedin.com/in/sara-fkaier-9069a7146/" target="_blank">
                <i class="fa fa-linkedin fa-3x logo"></i>
              </a>
              <a href="https://www.facebook.com/" target="_blank">
                <i class="fa fa-facebook fa-3x logo"></i>
              </a>
              <a href="https://plus.google.com/u/0/discover" target="_blank">
                <i class="fa fa-google-plus fa-3x logo"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase ecart_titre">Contactez-moi</h2>
            <h3 class="section-subheading text-muted">Si mon profil vous intéresse n'hésitez pas à me contacter !</h3>
            <!-- <div class="alert" role="alert"><?php if(isset($valid)) echo $valid; ?></div> -->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="index.php" class="formulario" method="post">

              <p class="formulaire"><?php if (isset($erreurnom)) echo $erreurnom; ?></p>
              <input type="text" class="formulario_input" name="nom" value="<?php if (isset($nom)) echo $nom; ?>">
              <label for ="" class="formulario_label">Nom</label>
              <div class="validation"></div>

              <input type="text" class="formulario_input" name="prenom">
              <label for ="" class="formulario_label">Prénom</label>
              <div class="validation"></div>

              <p class="formulaire"><?php if (isset($erreuremail)) echo $erreuremail; ?></p>
              <input type="text" class="formulario_input" name="email" value="<?php if (isset($email)) echo $email; ?>">
              <label for ="" class="formulario_label">E-mail</label>
              <div class="validation"></div>

              <p class="formulaire"><?php if (isset($erreurmessage)) echo $erreurmessage; ?></p>
              <input type="text" class="formulario_input" name="message" value="<?php if (isset($message)) echo $message; ?>">
              <label for ="" class="formulario_label">Commentaire</label>
              <div class="validation"></div>

              <input type="submit" class="formulario_submit">
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; <?= date('Y') ?> - Site CV Sara</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://plus.google.com/u/0/discover" target="_blank">
                  <i class="fa fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/sarafkaier" target="_blank">
                  <i class="fa fa-github"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/sara-fkaier-9069a7146/" target="_blank">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="admin/authentification.php" target="_blank"><i class="fa fa-lock" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Mon site CV</h2>
                  <p class="item-intro text-muted">Fait avec HTML5, CSS3, JS et bootstrap.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/site_cv.jpg" alt="">
                  <p>Réalisation de mon premier site CV entièrement responsive.</p>
                  <ul class="list-inline">
                    <li>Date: Juillet 2018</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Génér'action solidaire</h2>
                  <p class="item-intro text-muted">Site fait avec wordpress.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/generaction.jpg" alt="">
                  <p>Site réalisé pour une association qui lutte contre le harcèlement scolaire.</p>
                  <ul class="list-inline">
                    <li>Date: Février 2018</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Site E-commerce</h2>
                  <p class="item-intro text-muted">Site fait avec HTML5, CSS3, PHP7, SQL</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/e_commerce.jpg" alt="">
                  <p>Réalisation de mon premier site de e-commerce effectuer durant ma formation WebForce3.</p>
                  <ul class="list-inline">
                    <li>Date: Décembre 2017</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Lien pour les compétences -->
    <script src="js/main.js" type="text/javascript"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
