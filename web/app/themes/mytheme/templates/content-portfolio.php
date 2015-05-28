<h2>Stuff I've Done While At Work</h2>

<?php
 $portfolio_query = new WP_Query(array(
          'post_type' => 'portfolio',
          'orderby' => 'modified',
          'order' => 'DESC',
          'posts_per_page' => '-1'
          ));
if( $portfolio_query->have_posts() ) {
    echo '';
$i = 0;
while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
    if($i % 3 == 0) { ?> 
        <div class="row">
    <?php
    }
    ?>
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
        
        <button class="btn btn-primary btn-portfolio" type="button" data-toggle="collapse" data-target="#post-<?php echo get_the_ID(); ?>" aria-expanded="false" aria-controls="collapseExample">
          Tell Me More!
        </button>

        <div class="collapse" id="post-<?php echo get_the_ID(); ?>">
          <ul class="list-group list-group-flush text-center">
            <?php if (get_post_meta($post->ID, 'ecpt_portfolio_role', true)) : ?>
              <li class="list-group-item"><strong>Role:</strong><br><?php echo get_post_meta($post->ID, 'ecpt_portfolio_role', true); ?></li>
            <hr>
            <?php endif; ?>  
            <?php if (get_post_meta($post->ID, 'ecpt_portfolio_overview', true)) : ?>
             <li class="list-group-item"><strong>Overview:</strong><br><?php echo get_post_meta($post->ID, 'ecpt_portfolio_overview', true); ?></li>
            <hr>
            <?php endif; ?>
            <?php if (get_post_meta($post->ID, 'ecpt_portfolio_details', true)) : ?>
             <li class="list-group-item"><strong>Tech:</strong><br><?php echo get_post_meta($post->ID, 'ecpt_portfolio_details', true); ?></li>
            <?php endif; ?>     
            </ul>
        </div>
  </div>
</div>
<?php $i++; 
      if($i != 0 && $i % 3 == 0) { ?>
        </div><!--/.row-->
        <div class="clearfix"></div>

      <?php
       } ?>

      <?php  
        endwhile;
        }
        wp_reset_query();
        ?>