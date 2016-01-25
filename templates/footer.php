<footer class="banner wrap">
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>

    <p>
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/g-logo.png" alt="" class="g-logo"/>
        Cabinet de Podologie de Philippe Caudroy<br>Votre podologue à Issy les Moulineaux
    </p>
</footer>
