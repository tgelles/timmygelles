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
<div class="col-sm-12 col-md-5 portfolio panel panel-default">
      <div class="panel-body">
        <h3>
          <?php if (get_post_meta($post->ID, 'ecpt_portfolio_title', true)) : ?>
            <?php echo get_post_meta($post->ID, 'ecpt_portfolio_title', true); ?>
          <?php endif; ?>
        </h3>

        <?php $link = get_post_meta($post->ID, 'ecpt_portfolio_link', true);
            if( $link ) { ?>
              <a href="<?php echo $link; ?>"><?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?></a>
            <?php } else {
              the_post_thumbnail('full', array('class' => 'img-responsive') );
        } ?>
          <?php if (get_post_meta($post->ID, 'ecpt_portfolio_role', true)) : ?>
            <p><?php echo get_post_meta($post->ID, 'ecpt_portfolio_role', true); ?></p>
          <?php endif; ?>  
          <?php if (get_post_meta($post->ID, 'ecpt_portfolio_overview', true)) : ?>
            <p><?php echo get_post_meta($post->ID, 'ecpt_portfolio_overview', true); ?></p>
          <?php endif; ?>
          <?php if (get_post_meta($post->ID, 'ecpt_portfolio_details', true)) : ?>
            <p><?php echo get_post_meta($post->ID, 'ecpt_portfolio_details', true); ?></p>
          <?php endif; ?>
          <?php if (get_post_meta($post->ID, 'ecpt_portfolio_role', true)) : ?>
            <p><?php echo get_post_meta($post->ID, 'ecpt_portfolio_role', true); ?></p>
          <?php endif; ?>       
      </div>
</div>
<?php endwhile; ?> 