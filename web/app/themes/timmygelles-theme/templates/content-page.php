<section class="content">
<div class="homepage-text">
<div class="container">
<div class="homepage-text-inner">
<?php the_content(); ?>
</div>
</div>
</div>
<div class="container">
<?php if ( get_post_meta($post->ID, 'ecpt_callout', true) ) : ?><div class="callout"><?php echo get_post_meta($post->ID, 'ecpt_callout', true);?></div>		
<?php endif;?>
<?php if ( get_post_meta($post->ID, 'ecpt_callout2', true) ) : ?><div class="callout"><?php echo get_post_meta($post->ID, 'ecpt_callout2', true);?></div>						
<?php endif;?>
</div>
</section>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
