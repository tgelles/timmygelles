<section class="content" id="section1">
	<div class="homepage-banner">
		<div class="container">
			<div class="homepage-banner-text" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<div class="callouts">
		<div class="container">
			<?php if ( get_post_meta($post->ID, 'ecpt_callout', true) ) : ?>
				<?php echo get_post_meta($post->ID, 'ecpt_callout', true);?>	
			<?php endif;?>
			<?php if ( get_post_meta($post->ID, 'ecpt_callout2', true) ) : ?>
				<?php echo get_post_meta($post->ID, 'ecpt_callout2', true);?>						
			<?php endif;?>
		</div>
	</div>
</section>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
