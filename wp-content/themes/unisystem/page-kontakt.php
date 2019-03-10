<?php get_header(); ?>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-5  text-white text-uppercase">
				<strong><?php echo get_the_title(); ?></strong>
			</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="py-3">
					<?php echo do_shortcode( '[contact-form-7 id="101" title="Kontakt"]' ); ?>
				</div>
			</div>
			<div class="col-md-5">
				<div class="p-3">
					<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post();
							$content = apply_filters( 'the_content', get_the_content() );
							echo '<div class="py-4">'. $content .'</div>';
		
						endwhile; endif; 
					?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>