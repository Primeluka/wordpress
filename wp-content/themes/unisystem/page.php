<?php get_header(); ?>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-5 text-white">
				<strong><?php echo get_the_title(); ?></strong>
			</h1>
		</div>
	</div>

	<div class="row">
		<div class="container">
			<div class="col-md pb-5">
				<p>
					<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						
							$content = apply_filters( 'the_content', get_the_content() );
							echo $content;
		
						endwhile; endif; 
					?>
				</p>
			</div>
		</div>
	</div>

<?php get_footer(); ?>