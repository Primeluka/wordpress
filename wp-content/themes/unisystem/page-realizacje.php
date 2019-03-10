<?php get_header(); ?>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-5  text-white">
				<strong>ZREALIZOWANE</strong> PROJEKTY
			</h1>
		</div>
	</div>



	<div class="row">
		<div class="container">
			<div class="col-md">
				<h6 class="mb-4 text-muted">Kliknij na wybraną pozycję żeby zobaczyć szczegóły.</h6>
				<ul class="list-group">
				<?php	
					$currentPage = get_query_var('paged');

					$the_query = new WP_Query( array( 
							'category_name' => 'realizacje',
							'posts_per_page' => 10,
							'paged' => $currentPage
						));

					$wp_query = $the_query;

					if ( $the_query->have_posts()) : 
						while ( $the_query->have_posts()) :
							$the_query->the_post();
							?>
							<li class="list-group-item d-flex w-100 justify-content-between">
								<a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
								<small class="text-muted pl-4"><?php echo get_the_date(); ?></small>
							</li>
							<?php
						endwhile;

						echo '<div class="d-flex justify-content-center my-4">';
						bootstrap_pagination();
						echo '</div>';

					endif;
					
				?>
				</ul>
			</div>
		</div>
	</div>
	
<?php 
wp_reset_query();
get_footer(); 
?>