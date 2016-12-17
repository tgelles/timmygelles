<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<div class="row">
	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
		<?php if ($wp_query->max_num_pages > 1) : ?>
			  <nav class="post-nav">
			    <ul class="pager">
			      <li class="next"><?php previous_posts_link(__('<span class="glyphicon glyphicon glyphicon-menu-left" aria-hidden="true"></span> Newer posts', 'roots')); ?></li>
			      <li class="previous"><?php next_posts_link(__('Older posts <span class="glyphicon glyphicon glyphicon-menu-right" aria-hidden="true"></span>', 'roots')); ?></li>
			    </ul>
			  </nav>
		<?php endif; ?>
	</div>
</div>