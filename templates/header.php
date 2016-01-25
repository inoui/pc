<header class="top-banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                Philippe Caudroy - Pédicure - Podologue D.E
            </div>
            <div class="col-sm-6">
                <ul class="list-inline">
                    <li><a href="#">Prendre rendez-vous</a></li>
                    <li><a href="#">Plan d'accès</a></li>
                    <li><a href="#">Le Cabinet</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                Recherche
            </div>
        </div>
    </div>
</header>


<header class="banner wrap">

    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.svg" alt="" />
    </a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>

</header>
