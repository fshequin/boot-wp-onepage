<?php get_header(); ?>

<div class="container">
	
	<div class="row">
		<div class="col-md-12 home-hero">
			<h2 class="text-center">Senior Level Marketing Consultants</h2>
			<h4 class="text-center">Food & Wine + Wellness & Health</h4>
		</div>
	</div>
</div>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12 home-content text-center">
			<div class="content-wrapper">
				<?php the_content(); ?>
			</div>
		</div>
	</div>


<?php endwhile; ?>
<?php endif; ?>

</div>

<div class="container">
	
	<div class="row">
		<div class="col-md-12 home-clients">
			<h2 class="text-center">Some of Our Clients</h2>
			<ul class="center-block">
				<li><a href="#"><img src="http://placehold.it/280x150"></a></li>
				<li><a href="#"><img src="http://placehold.it/280x150"></a></li>
				<li><a href="#"><img src="http://placehold.it/280x150"></a></li>
			</ul>

		</div>
	</div>
</div>



<?php get_footer(); ?>