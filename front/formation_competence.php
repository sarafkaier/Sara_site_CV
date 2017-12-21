<?php include 'inc/header.inc.php'; ?>

  <?php require 'inc/init.inc.php';
  $ligne_competence = '';
  $competences = '';
  ?>

  <link rel="stylesheet" href="css/formation_competence.css">
  <div id="snow"></div>
  <div class="container">
    <h1>Compétences</h1>
    <div class="col-md-6 col-md-offset-3">
      <?php
      $competences = $bdd -> query("SELECT * FROM t_competences");
      $ligne_competence = $competences -> fetchAll(PDO::FETCH_ASSOC);
      ?>
      <h2 class="titulo">Language web</h2>
      <ul class="skill">
        <?php
        for($i=0; $i<count($ligne_competence); $i++){?>
          <li><span class="blueline html"></span><em><?= $ligne_competence[$i]['competence']; ?> <?= $ligne_competence[$i]['c_niveau']; ?>%</em></li>
        <?php } ?>
      </ul>
    </div>
  </div>

<?php include 'inc/footer.inc.php'; ?>
