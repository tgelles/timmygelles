<?php while (have_posts()) : the_post(); ?>
  <span id="section1"></span>
  <?php get_template_part('templates/content', 'page'); ?>
  <span id="section2"></span>
  <div class="container">
  <?php get_template_part('templates/content', 'portfolio'); ?>
  </div>
<?php endwhile; ?>
