<?php get_header(); ?>

<div class="container page-container">
      
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

      <div class="row">
        <div class="col-md-12 post-content">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
      </div>
<?php endwhile; ?>
<?php endif; ?>

</div>


<?php get_footer(); ?>