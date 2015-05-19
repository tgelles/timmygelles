<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <span id="section1"></span>
  <?php get_template_part('templates/content', 'page'); ?>
  <span id="section2"></span>
  <?php get_template_part('templates/content', 'portfolio'); ?>
<?php endwhile; ?>
