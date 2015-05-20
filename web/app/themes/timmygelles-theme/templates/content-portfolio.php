<h2>Portfolio</h2>

<?php //Set Portfolio Query Parameters
        $portfolio_query = new WP_Query(array(
          'post_type' => 'portfolio',
          'orderby' => 'ID',
          'order' => 'DESC',
          'posts_per_page' => '-1'
          ));
           ?>

<?php while ($portfolio_query->have_posts()) : $portfolio_query->the_post();  ?>
<div class="col-sm-12 col-md-4">
  <div class="portfolio-item text-center">
        <h3>
          <?php if (get_post_meta($post->ID, 'ecpt_portfolio_title', true)) : ?>
            <?php echo get_post_meta($post->ID, 'ecpt_portfolio_title', true); ?>
          <?php endif; ?>
        </h3>

        <?php $link = get_post_meta($post->ID, 'ecpt_portfolio_link', true);
            if( $link ) { ?>
              <a href="<?php echo $link; ?>"><?php the_post_thumbnail('full', array('class' => 'portfolio-img img-responsive') ); ?></a>
            <?php } else {
              the_post_thumbnail('full', array('class' => 'portfolio-img img-responsive') );
        } ?>
          <ul class="list-group list-group-flush text-center">
            <?php if (get_post_meta($post->ID, 'ecpt_portfolio_role', true)) : ?>
              <li class="list-group-item"><strong>Role:</strong><br><?php echo get_post_meta($post->ID, 'ecpt_portfolio_role', true); ?></li>
            <?php endif; ?>  
            <?php if (get_post_meta($post->ID, 'ecpt_portfolio_overview', true)) : ?>
             <li class="list-group-item"><strong>Overview:</strong><br><?php echo get_post_meta($post->ID, 'ecpt_portfolio_overview', true); ?></li>
            <?php endif; ?>
            <?php if (get_post_meta($post->ID, 'ecpt_portfolio_details', true)) : ?>
             <li class="list-group-item"><strong>Tech:</strong><br><?php echo get_post_meta($post->ID, 'ecpt_portfolio_details', true); ?></li>
            <?php endif; ?>     
            </ul> 
  </div>
</div>
<?php endwhile; ?> 