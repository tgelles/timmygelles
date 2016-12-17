<h2>Stuff I've Done</h2>

<?php
 $portfolio_query = new WP_Query(array(
          'post_type' => 'portfolio',
          'orderby' => 'modified',
          'order' => 'DESC',
          'posts_per_page' => '-1'
          ));
?>
<?php $i = 1; //start the counter before the loop?>
<?php if($portfolio_query->have_posts()): global $more; ?>
  <div class="row">
    <?php while($portfolio_query->have_posts()): $portfolio_query->the_post(); $more = 0; ?>
    <article class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-height col-md-height col-sm-height col-top portfolio"  itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
      <div class="portfolio-item text-center">
        <h3 itemprop="headline">
          <?php if (get_post_meta($post->ID, 'ecpt_portfolio_title', true)) : ?>
            <?php echo get_post_meta($post->ID, 'ecpt_portfolio_title', true); ?>
          <?php endif; ?>
        </h3>

        <?php $link = get_post_meta($post->ID, 'ecpt_portfolio_link', true);
            if( $link ) : ?>
            <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
              <a href="<?php echo $link; ?>"><?php the_post_thumbnail('full', array('class' => 'portfolio-img img-responsive', 'itemprop' => 'image') ); ?></a>
            <?php else : ?>
              <?php the_post_thumbnail('full', array('class' => 'portfolio-img img-responsive', 'itemprop' => 'image') ); ?>
            </div>
            <?php endif; ?>

        <button class="btn btn-primary btn-portfolio" type="button" data-toggle="collapse" data-target="#post-<?php echo get_the_ID(); ?>" aria-expanded="false" aria-controls="collapseExample">
          Tell Me More!
        </button>

        <div class="collapse" id="post-<?php echo get_the_ID(); ?>" itemprop="text">
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
    </article> <!--end: portfolio item -->

    <?php if ( $i%2 == 0 ){ echo '<div class="clearfix visible-sm-block">'; } // show clearfix after each 2 cols for xs ?>
    <?php if ( $i%3 == 0 ){ echo '<div class="clearfix visible-lg-block visible-md-block">'; } // show clearfix after each 3 cols for lg and md ?>

  <?php endwhile; ?>
  </div><!-- end: row -->
  <?php endif; ?>
