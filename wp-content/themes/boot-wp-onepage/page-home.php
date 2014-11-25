<?php get_header(); ?>

<div class="home-background home-background-1 text-center" style="position: fixed; z-index: -1;" data-50="background-position: 50% 48%; opacity: 1.0" data-500="background-position: 50% 30%; opacity: 0.0;">
</div><!-- end home-background -->

	<div class="home-hero-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12 home-hero">
					<h2 class="text-left"><?php bloginfo('name'); ?></h2>
					<h4 class="text-left"><?php bloginfo('description'); ?> &nbsp;<span class="orange">w/ parallax</span></h4>
				</div>
			</div>
		</div><!-- end container -->
	</div>

<div class="home-content-wrapper">
	<div class="container">
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	
	
		<div class="row">
			<div class="col-md-12 home-content">
				<div class="content-wrapper">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	
	
	<?php endwhile; ?>
	<?php endif; ?>
	
	</div><!-- end container -->
</div>

<div class="home-background home-background-2 text-center" data-600="background-position: 0% 50%;" data-1000="background-position: 100% 50%;">
	
</div>


<div class="home-clients-wrapper">
	<div class="container container-home-clients">
		<div class="row">
			<div class="col-md-12 home-clients">
				<h2 class="">Some of Our Clients</h2>
				<ul class="">
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/image-portfolio-thumb-sample-2.png"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/image-portfolio-thumb-sample-2.png"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/image-portfolio-thumb-sample-2.png"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/image-portfolio-thumb-sample-2.png"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/image-portfolio-thumb-sample-2.png"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/image-portfolio-thumb-sample-2.png"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/image-portfolio-thumb-sample-2.png"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/image-portfolio-thumb-sample-2.png"></a></li>
				</ul>
				<p>&nbsp;</p>
			</div>
		</div>
	</div>
</div>

<div class="home-background home-background-3 text-center">

  <img src="<?php echo get_template_directory_uri(); ?>/images/image-one-trans-square.png" data-1200="background-position: 0% 50%; -webkit-transform: rotate(-360deg);
  -moz-transform: rotate(-360deg);
  -ms-transform: rotate(-360deg);
  -o-transform: rotate(-360deg);
  transform: rotate(-360deg);" data-1700="background-position: 100% 50%; -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);">
	
</div>

<div class="home-action-wrapper">
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
</div>
<div class="home-action-below-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12 home-action-below">

			</div>
		</div>
	</div>
</div>

<div class="home-background home-background-4 text-center" style="position: fixed; z-index: -2;" data-200-end="background-position: 50% 50%; opacity: 0.0;" data-end="background-position: 50% 50%; opacity: 1.0;">
	
</div>


<div class="home-contact-wrapper">
	<div class="container container-home-contact">
		<div class="row">
			<div class="col-md-12 home-contact">
				<h2 class="">Contact Us</h2>
				<p>Company Name<br>
					Street Address<br>
					City, State, Zip
				</p>
				<p><a href="#">Email</a></p>
				<p>Phone<br>Fax</p>
				
			</div>
			
		</div>
		
	</div>
	
</div>
<?php get_footer(); ?>