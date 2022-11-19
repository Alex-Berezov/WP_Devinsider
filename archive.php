<?php get_header() ?>

<section class="ourActivity">
  <div class="container">
      <h2 class="ourActivityTitle H2"><?php single_term_title() ?></h2>
      <div class="activities">
        
        <?php while( have_posts() ):
						the_post();
        ?>
          <div class="activitiesItem">
            <a href="<?php the_permalink() ?>" class="activitiesItemLink">
              <?php echo the_post_thumbnail() ?>
            </a>
          </div>
				<?php endwhile; ?>
        
      </div>
  </div>
</section>

<?php get_footer() ?>