<?php get_header(); ?>

<section class="section-news">
	<h2>all news</h2>
	<div class="container">		
		<div class="row overflow-hidden">

			<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
						'posts_per_page' => 9,
						'paged' => $paged
					);
			$the_query = new WP_Query( $args );	
			?>

			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	<!--  LOOP START  -->
			<div class="col-md-6 col-lg-4 news-card">
				<a href="<?php the_permalink(); ?>">
					<?php if(has_post_thumbnail()) {  the_post_thumbnail(); } else { ?>
						<img src="<?php bloginfo('template_directory'); ?>/images/news-default.png" alt="Method Consultancy">
					<?php } ?>
				</a>
				<div class="news-card-content d-flex flex-column justify-content-between">
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					<div>
						<p><?php echo the_time('F jS, Y'); ?> </p>
						<div class="news-card-bottom-row">	<!--  wrapper to add space between elements  -->
							<a href="<?php echo get_category_link(get_the_category()[0]); ?>"><button type="button"><?php  echo get_the_category()[0]->name; ?></button></a>
							<div>
								<small>by</small>
								<img src="<?php bloginfo('template_directory'); ?>/images/logo-sm.png" alt="Method Consultancy">
							</div>
						</div>	 <!--  ./news-card-bottom-row  -->
					</div>
				</div>	<!--  ./news-card-content  -->
			</div>	<!--  ./col  -->
			<?php endwhile; endif; ?>	<!--  LOOP END  -->
		</div>

		<!-- Pagination -->
		<div class="d-flex flex-row justify-content-between">
			<p><?php previous_posts_link( ' Previous page' );?></p>
			<p><?php next_posts_link( 'Next page', $the_query->max_num_pages ); ?> </p>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>