<?php get_header(); ?>
<div id="skrollr-body">
<div class="home-background home-background-1 text-center" style="position: fixed; z-index: -1;" data-50="background-position: 50% 48%; opacity: 1.0" data-500="background-position: 50% 30%; opacity: 0.0;">
</div><!-- end home-background -->

	<div class="home-hero-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12 home-hero">
					<div class="home-hero-inner">
						<h2 class="text-left"><?php bloginfo('name'); ?></h2>
						<h4 class="text-left"><?php bloginfo('description'); ?> &nbsp;<span class="orange">w/ parallax</span></h4>
					</div>
				</div>
			</div>
		</div><!-- end container -->
	</div>

<section id="about" class="home-content-wrapper" title="about">
	<div class="container">
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	
	
		<div class="row">
			<div  class="col-md-12 home-content">
				<div class="content-wrapper">
					<?php if( of_get_option('show_section_info_checkbox') == '1' ) { ?>
					<span class="section-name orange">Section One - <?php echo of_get_option('section_1_page'); ?></span>
					<?php } ?>
					<?php 	
						$boot_id = intval( of_get_option('section_1_page') );
						$section_post = get_post( $boot_id, OBJECT ); 
						echo wpautop($section_post->post_content); 
					?>
				</div>
			</div>
		</div>
	
	
	<?php endwhile; ?>
	<?php endif; ?>
	
	</div><!-- end container -->
</section>

<div class="home-background home-background-2 text-center" data-600="background-position: 0% 50%;" data-1000="background-position: 100% 50%;">
	
</div>


<section id="portfolio" class="home-clients-wrapper" title="portfolio">
	<div class="container container-home-clients">
		<div class="row">
			<div class="col-md-12 home-clients">
				<?php if( of_get_option('show_section_info_checkbox') == '1' ) { ?>
				<span class="section-name orange">Section Two - <?php echo of_get_option('section_2_page'); ?></span>
				<?php } ?>
				<?php 	
					$boot_id = intval( of_get_option('section_2_page') );
					$section_post = get_post( $boot_id, OBJECT ); 
					echo '<h2>'.$section_post->post_title.'</h2>'; 
					echo wpautop($section_post->post_content); 
				?>
			</div>
		</div>
	</div>
</section>

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
				<?php if( of_get_option('show_section_info_checkbox') == '1' ) { ?>
				<span class="section-name orange">Section Three - <?php echo of_get_option('section_3_page'); ?></span>
				<?php } ?>
				<?php 	
					$boot_id = intval( of_get_option('section_3_page') );
					$section_post = get_post( $boot_id, OBJECT ); 
					echo '<h2>'.$section_post->post_title.'</h2>'; 
					echo wpautop($section_post->post_content); 
				?>
	
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


<section id="contact" class="home-contact-wrapper" title="contact">
	<div class="container container-home-contact">
		<div class="row">
			<div class="col-md-12 home-contact">
				<?php if( of_get_option('show_section_info_checkbox') == '1' ) { ?>
				<span class="section-name orange">Section Four - <?php echo of_get_option('section_4_page'); ?></span>
				<?php } ?>
				<?php 	
					$boot_id = intval( of_get_option('section_4_page') );
					$section_post = get_post( $boot_id, OBJECT ); 
					echo '<h2>'.$section_post->post_title.'</h2>'; 
					echo wpautop($section_post->post_content); 
				?>
			</div>
			
		</div>
		
	</div>
	
</section>
<?php get_footer(); ?>