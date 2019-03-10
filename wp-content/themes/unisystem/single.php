<?php get_header(); ?>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-5 text-white">
				<strong>ZREALIZOWANE</strong> PROJEKTY
			</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md">
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();
						echo '<h2 class="mb-4 font-weight-bold">'. get_the_title() .'</h2>';
						$content = apply_filters( 'the_content', get_the_content() );
						echo $content;
						endwhile; 
					endif; 
				?>

			</div>
		</div>
	</div>
		

<?php get_footer(); ?>