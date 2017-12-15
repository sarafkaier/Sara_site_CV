<?php include 'inc/header.inc.php'; ?>

<link rel="stylesheet" href="css/formation_competence.css">
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



<?php include 'inc/footer.inc.php'; ?>
