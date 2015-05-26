<header class="banner" role="banner">
  <nav role="navigation" class="navbar navbar-default navbar-fixed-top affix-top">
   <div class="container">
    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right']);
      endif;
      ?>
    </div>
  </nav>
  <div class="intro-header" style="background-image: url('<?php echo get_template_directory_uri() ?>/dist/images/header1.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Howdy</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
</header>
