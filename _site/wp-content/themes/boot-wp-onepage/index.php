<?php get_header(); ?>

<div class="container news-container">
      
<?php if(have_posts()) : ?>
	<h1>News</h1>
<?php while(have_posts()) : the_post(); ?>


      <div class="row">
        <div class="col-md-12 post-content">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
        </div>
      </div>
<?php endwhile; ?>
<?php endif; ?>

</div>


<?php get_footer(); ?>