<?php
include 'inc/header.inc.php';
include 'inc/init.inc.php';

// Connexion à la table titre_cv
$resultat = $bdd->query("SELECT * FROM t_titre_cv");
$ligne_accroche = $resultat->fetch();

// Connexion à la table t_utilisateurs
$resultat = $bdd->query("SELECT * FROM t_utilisateurs");
$ligne_utilisateur = $resultat->fetch();

// Connexion à la table t_formations
$ligne_formation = '';
$formation = '';

$formation = $bdd->query("SELECT * FROM t_formations");
$ligne_formation = $formation->fetchAll(PDO::FETCH_ASSOC);

// Connexion à la table t_competences
$resultat = $bdd->prepare("SELECT * FROM t_competences");
$resultat->execute();
?>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <div id="snow"></div>
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">SF</span>
            <span class="d-none d-lg-block">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/ordi.jpg" alt="image d'un ordinateur">
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#accueil">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#formations">Formations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#competences">Compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#realisations">Réalisations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#loisirs">Loisirs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

        <section class="resume-section p-3 p-lg-5 d-flex d-column" id="accueil">
            <div class="my-auto">
                <h1 class="mb-3"><?= $ligne_utilisateur['prenom']; ?>
                    <span class="text-primary"><?= $ligne_utilisateur['nom']; ?></span>
                </h1>
                <div class="subheading mb-5 text-md-center"><span id="holder"></span><span class="blinking-cursor">|</span>
                    <!-- <a href="mailto:sarahfkaier@hotmail.fr">sarahfkaier@hotmail.fr</a> -->
                </div>
                <p class="presentation text-md-center">Développeuse et intégratrice web junior, je me passionne pour le développement back-end.<br> Je suis capable d'utiliser différentes technologies comme HTML5 & CSS3, JavaScript, PHP, MySQL de même que d'utiliser des CMS comme WordPress.<br> Mon but est d'associer design et technologie, afin de créer des sites internet attractifs. Vous trouverez ci-dessous mon CV papier à télécharger.</p><br><br>
                <ul class="list-inline list-social-icons mb-0">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/" target="_blank">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/in/sara-fkaier-9069a7146/" target="_blank">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://github.com/sarafkaier" target="_blank">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul><br>
                <a href="CV_sara_fkaier.pdf" target="_blank" class="inter-section-button offset-md-5">Téléchargez mon CV</a>
            </div>
        </section>

        <section class="resume-section p-3 p-lg-5 d-flex flex-column fond" id="formations">
            <div class="my-auto">
                <h2 class="mb-3">Formations</h2>
                <?php for ($i = 0; $i < count($ligne_formation); $i++) { ?>

                    <div class="resume-item d-flex flex-column flex-md-row mb-5 titre">
                        <div class="resume-content mr-auto">
                            <h3 class="mb-0"><?= $ligne_formation[$i]['f_titre']; ?></h3>
                            <div class="subheading mb-3"><?= $ligne_formation[$i]['f_soustitre']; ?></div>
                            <!-- <p>GPA: 3.23</p> -->
                        </div>
                        <div class="resume-date text-md-right">
                            <span class="text-primary"><?= $ligne_formation[$i]['f_dates']; ?></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>

        <section class="resume-section p-3 p-lg-5 d-flex flex-column " id="competences">
            <div class="my-auto">
                <h2 class="mb-3">Compétences</h2>

                <div class="subheading mb-3 titre">Languages de programmation &amp; outils</div>
                <ul class="list-inline list-icons">
                    <li class="list-inline-item">
                        <i class="devicons devicons-html5"><span>HTML5<br>80%</span></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="devicons devicons-css3"><span>CSS3<br>70%</span></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="devicons devicons-php"><span>PHP<br>50%</span></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="devicons devicons-mysql"><span>MySQL<br>60%</span></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="devicons devicons-javascript"><span>JavaScript<br>25%</span></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="devicons devicons-bootstrap"><span>Bootstrap<br>60%</span></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="devicons devicons-wordpress"><span>Wordpress<br>40%</span></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="devicons devicons-github"><span>Github<br>50%</span></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="devicons devicons-atom"><span>Atom<br>70%</span></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="devicons devicons-photoshop"><span>Photoshop<br>20%</span></i>
                    </li>
                </ul>

                <div class="subheading mb-3 titre">Savoir-faire</div>
                <?php while ($ligne_competence = $resultat->fetch()) { ?>
                    <ul class="fa-ul mb-0">
                        <li>
                            <i class="fa-li fa fa-check"></i>
                            <?= $ligne_competence['savoir_faire']; ?>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </section>

        <section class="resume-section p-3 p-lg-5 d-flex flex-column fond" id="realisations">
            <div class="my-auto">
                <h2 class="mb-3">Mes réalisations</h2>
                <picture>
                    <div class="rotationImg titre">
                        <!-- <h3>Image en HTML/CSS</h3> -->
                        <a href="http://sarafkaier.fr/"><img src="img/01.png" class="img-fluid image" alt="image de mon site CV"></a>
                        <a href="http://generaction-solidaire.fr/" target="_blank"><img src="img/generaction.png" class="img-fluid image" alt=""></a>
                        <a href="" target="_blank"><img src="img/02.jpg" class="img-fluid image" alt="image du site annonceo"></a>
                    </div>
                </picture>
            </div>
        </section>
        <section class="resume-section p-3 p-lg-5 d-flex flex-column " id="loisirs">
            <div class="my-auto">
                <h2 class="mb-3">Mes loisirs</h2>
                <div class="container titre">
                    <div class="row justify-content-md-center">
                        <div class="col-md-auto">
                            <img class="img-fluid rounded-circle mx-auto img-thumbnail" src="img/code.png" alt="logo code">
                            <p class="text-md-center">Coder, me mettre à jour<br> et toujours apprendre<br> de nouvelles choses.</p>
                        </div>
                        <div class="col-md-auto">
                            <img class="img-fluid rounded-circle mx-auto img-thumbnail" src="img/logo-livre.gif" alt="image d'un livre">
                            <p class="text-md-center">La lecture est à l'esprit<br> ce que les aliments<br> sont au corps.</p>
                        </div>
                        <div class="col-md-auto">
                            <img class="img-fluid rounded-circle mx-auto img-thumbnail" src="img/dessin.jpg" alt="image d'un crayon et d'un pinceau">
                            <p class="text-md-center">Prendre un crayon,<br> une feuille et dessiner<br> ce que je vois.</p>
                        </div>
                        <div class="col-md-auto">
                            <img class="img-fluid rounded-circle mx-auto img-thumbnail" src="img/voyage.png" alt="image d'un avion">
                            <p class="text-md-center">Le voyage est sans nul doute<br> l'une des expériences<br> les plus enrichissantes qu'il<br> nous est donné de vivre.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="resume-section p-3 p-lg-5 d-flex flex-column fond" id="contact">
            <div class="my-auto">
                <h2 class="mb-3">Contactez moi</h2>

                <div class="info titre"><p><i class="fa fa-smile-o fa-5x"  aria-hidden="true"></i></p></a></div>

                <form action="index.php" method="post">

                    <h3 class="contact">Un projet ? Mon profil vous intéresse ? N'hésitez pas à me contacter !</h3>
                    <!-- BONUS EMAIL -->

                    <!-- FIN BONUS EMAIL -->
                    <div class="contentform">
                        <div id="sendmessage"> Votre message a bien été envoyé ! Merci </div>
                        <div class="leftcontact">
                            <div class="form-group">
                                <p class="php"><?php if (isset($erreurnom)) echo $erreurnom; ?></p>
                                <p>Nom<span>*</span></p>
                                <span class="icon-case"><i class="fa fa-male"></i></span>
                                <input type="text" name="nom" id="nom" value="<?php if (isset($nom)) echo $nom; ?>"/>
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
                    <button type="submit" class="bouton-contact">Envoyez</button>
                </form>
            </div>
        </section>
    </div>

    <?php
    include 'inc/footer.inc.php';
