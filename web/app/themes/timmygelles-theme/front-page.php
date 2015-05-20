<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <section class="content" id="section2">
  <div class="container">
  <?php get_template_part('templates/content', 'portfolio'); ?>
  </div>
  </section>
<?php endwhile; ?>
