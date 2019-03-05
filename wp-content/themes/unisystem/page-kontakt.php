<?php get_header(); ?>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-5  text-white">
				<strong>FORMULARZ</strong> KONTAKTOWY
			</h1>
		</div>
	</div>

	<div class="row">
		<div class="container">
			<div class="col-md">

				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();
						$content = apply_filters( 'the_content', get_the_content() );
						echo '<div class="py-4">'. $content .'</div>';
	
					endwhile; endif; 
				?>

			</div>
		</div>
	</div>

<?php get_footer(); ?>