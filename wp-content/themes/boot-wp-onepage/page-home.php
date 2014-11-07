<?php get_header(); ?>

<div class="container">
	
	<div class="row">
		<div class="col-md-12 home-hero">
			<h2 class="text-left"><?php bloginfo('name'); ?></h2>
			<h4 class="text-left"><?php bloginfo('description'); ?></h4>
		</div>
	</div>
</div>
<div class="home-background home-background-1 text-center" data-0="background-position: 50% 20%;" data-500="background-position: 50% 70%;">
	
</div>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12 home-content">
			<div class="content-wrapper">
				<?php the_content(); ?>
			</div>
		</div>
	</div>


<?php endwhile; ?>
<?php endif; ?>

</div>
<div class="home-background home-background-2 text-center" data-0="background-position: 50% 20%;" data-500="background-position: 50% 40%;">
	
</div>
<div class="container container-home-clients">
	
	<div class="row">
		<div class="col-md-12 home-clients">
			<h2 class="">Some of Our Clients</h2>
			<ul class="">
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/image-portfolio-thumb-sample-2.png"></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/image-portfolio-thumb-sample-2.png"></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/image-portfolio-thumb-sample-2.png"></a></li>
			</ul>
			<p>&nbsp;</p>
		</div>
	</div>
</div>
<div class="home-background home-background-3 text-center" data-0="background-position: 50% 10%;" data-500="background-position: 50% 20%;">
	
</div>
<div class="container">
	
	<div class="row">
		<div class="col-md-12 home-action">
			<h2 class="">Give Us a Call - We Can Help!</h2>
			<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. </p>

		</div>
	</div>
</div>
<div class="home-background home-background-4 text-center" data-0="background-position: 50% 20%;" data-500="background-position: 50% 70%;">
	
</div>
<?php get_footer(); ?>