<?php get_header() ?>
  <div class="banner-page">
    <h3>New Arrival</h3>
    <p>Time to discovery the most popular trend in 2023</p>
  </div>
</section>

<!-- <?php echo $args ?> -->

<section class="section-account">
  <div class="row-3 center">
   <?php if(have_posts()): ?>
    <?php while(have_posts()) : the_post();?>
    <?php the_content() ?>
    <?php endwhile ?>
    <?php endif ?>
  </div>
</section>

<?php get_footer() ?>