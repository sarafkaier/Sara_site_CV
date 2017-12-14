    <script src="js/index.js"></script>

    <!-- Lien pour texte qui defile -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/main.js" type="text/javascript"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(document).snowfall();

  $(window).resize(() => {
    $(document).snowfall('clear');
    $(document).snowfall();
  });
    </script>

    <footer>
      <div class="container">
        <p class="text-muted"> <i class="fa fa-copyright" aria-hidden="true"></i> <?= date('Y') ?> - Site CV de Sara</p>
        <a href="../admin/authentification.php"><i class="fa fa-lock" aria-hidden="true"></i></a>
      </div>
    </footer>
  </body>
</html>
