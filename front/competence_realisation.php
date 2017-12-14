<?php require 'inc/header.inc.php'; ?>

  <link rel="stylesheet" href="css/competence_realisation.css">
  <div class="bg_anim"></div>
  <div class="container">
    <h1>Compétences :</h1>
    <div class="col">
      <?php
        // $sql = $bdd -> query("SELECT * FROM competences");
        // while ($competences = $sql -> fetch()):
      ?>
      <h2 class="titulo">Front</h2>
      <ul class="skill">
        <li><span class="blueline html"></span><em>HTML</em></li>
        <li><span class="blueline css"></span><em>CSS</em></li>
        <li><span class="blueline javascript"></span><em>Javascript</em></li>
        <li><span class="blueline jquery"></span><em>jQuery</em></li>
      </ul>
    </div>
    <div class="col">
      <h2 class="plataformas titulo">Back</h2>
      <ul class="skill">
        <li><span class="greenline php"></span><em>PHP</em></li>
        <li><span class="greenline silex"></span><em>Silex</em></li>
        <li><span class="greenline laravel"></span><em>Laravel</em></li>
      </ul>
    </div>
    <div class="col">
      <h2 class="programas titulo">Plateforme</h2>
      <ul class="skill">
        <li><span class="redline photoshop"></span><em>Photoshop</em></li>
        <li><span class="redline bootstrap"></span><em>Bootstrap</em></li>
        <li><span class="redline wordpress"></span><em>Wordpress</em></li>
      </ul>
    </div>
    <?php //endwhile; ?>
  </div>

  <h1>Réalisations :</h1>
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
  </section>

<?php require 'inc/footer.inc.php'; ?>
