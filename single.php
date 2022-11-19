<?php get_header() ?>

<section class="singleActivity">
  <div class="container-full">

    <div class="container">
      <?php the_post() ?>
      <h2 class="singleActivityTitle H2"><?php single_post_title() ?></h2>
      <div class="infoBlock">
        <?php the_content() ?>
      </div>
  </div>
</section>

<?php get_footer() ?>