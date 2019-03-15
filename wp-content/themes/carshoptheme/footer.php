<div>
<footer>
  <nav class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'secondary',
          'container' => false,
          'menu_class' => 'nav navbar-nav navbar-right'
          )
        );
      ?>
    </div>
    </div><!-- /.container-fluid -->
  </nav>
</footer>
</div>

</div> <!--.container-->
<?php wp_footer(); ?>

</body>
</html>
