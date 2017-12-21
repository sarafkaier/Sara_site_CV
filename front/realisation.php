<?php require 'inc/header.inc.php'; ?>
  <?php require 'inc/init.inc.php';
  $ligne_realisation = '';
  $realisation = '';
  ?>

  <link rel="stylesheet" href="css/realisation.css">
  <h1>Réalisations</h1>
  <?php
  $realisation = $bdd -> query("SELECT * FROM t_realisations");
  $ligne_realisation = $realisation -> fetchAll(PDO::FETCH_ASSOC);
  ?>

  <section class="awSlider">
    <div id="snow"></div>
    <div class="container">
      <div class="row" id="work">
        <div class="col-md-6 work-item">
          <div class="itemInfo fontJosefin">
            <?php
            for($i=0; $i<count($ligne_realisation); $i++){?>
            <p>Titre:<br><span class="fontLora"><?= $ligne_realisation[$i]['r_titre']; ?></span></p>
            <p>Sous-titre:<br><span class="fontLora"><?= $ligne_realisation[$i]['r_soustitre']; ?></span></p>
            <p>Description:<br><span class="fontLora"><?= $ligne_realisation[$i]['r_description']; ?></span></p>
            <?php } ?>
          </div>
          <div class="item">
            <img src="img/01.png" class="pcIcon img-fluid mx-auto d-block">
            <p class="fontJosefin projectTitle text-center mx-auto">projet:<br><span class="fontLora">Site CV</span></p>
            <a class="link" href="#"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
          </div>
        </div>

        <div class="col-md-6 work-item">
          <div class="itemInfo fontJosefin">
            <p>titre:<br><span class="fontLora"></span></p>
            <p>story:<br><span class="fontLora"></span></p>
            <p>tools:<br><span class="fontLora"></span></p>
          </div>
          <div class="item">
            <img src="img/02.jpg" class="pcIcon img-fluid mx-auto d-block">
            <p class="fontJosefin projectTitle text-center mx-auto">projet:<br><span class="fontLora">Site Annonceo</span></p>
            <a class="link" href="#"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-6 work-item">
          <div class="itemInfo fontJosefin">
            <p>titre:<br><span class="fontLora"></span></p>
            <p>story:<br><span class="fontLora"></span></p>
            <p>tools:<br><span class="fontLora"></span></p>
          </div>
          <div class="item">
            <img src="img/03.png" class="pcIcon img-fluid mx-auto d-block">
            <p class="fontJosefin projectTitle text-center mx-auto">projet:<br><span class="fontLora">Site HTML / CSS</span></p>
            <a class="link" href="#"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-6 work-item">
            <div class="itemInfo fontJosefin">
              <p>titre:<br><span class="fontLora"></span></p>
              <p>story:<br><span class="fontLora"></span></p>
              <p>tools:<br><span class="fontLora"></span></p>
            </div>
            <div class="item">
              <img src="img/04.png" class="pcIcon img-fluid mx-auto d-block">
              <p class="fontJosefin projectTitle text-center mx-auto">projet:<br><span class="fontLora">Site e-boutique</span></p>
              <a class="link" href="#"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>
    </div>
  </section>

<?php require 'inc/footer.inc.php'; ?>
