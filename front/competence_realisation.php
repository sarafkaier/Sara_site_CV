<?php require 'inc/header.inc.php'; ?>
<link rel="stylesheet" href="css/competence_realisation.css">

<div class="container">
  <h1>Compétences :</h1>
  <div class="col">
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
</div>

<h1>Réalisations :</h1>
<section class="awSlider">
  <div  class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target=".carousel" data-slide-to="0" class="active"></li>
      <li data-target=".carousel" data-slide-to="1"></li>
      <li data-target=".carousel" data-slide-to="2"></li>
      <li data-target=".carousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner col-md-12" role="listbox">
      <div class="item active">
        <img src="http://www.adobewordpress.com/wp-content/uploads/2014/02/wallpaper-thumb-941.jpg">
        <div class="carousel-caption">Mon premier site en HTML/CSS</div>
      </div>
      <div class="item">
        <img src="http://www.adobewordpress.com/wp-content/uploads/2014/02/wallpaper-thumb-101.jpg">
        <div class="carousel-caption">Annonceo</div>
      </div>
      <div class="item">
        <img src="http://www.adobewordpress.com/wp-content/uploads/2014/02/wallpaper-thumb-1051.jpg">
        <div class="carousel-caption">Site e-commerce</div>
      </div>
      <div class="item">
        <img src="http://www.adobewordpress.com/wp-content/uploads/2013/07/wallpaper-thumb-74.jpg">
        <div class="carousel-caption">Site de production</div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Geri</span>
    </a>
    <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">İleri</span>
    </a>
  </div>
</section>
<?php require 'inc/footer.inc.php'; ?>
