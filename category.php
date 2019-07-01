<?php get_header(); ?>

    <div class="container">



		<div class="page-header py-4">				    	
			<h1>News Post category: <?php wp_title( '' ); ?></h1>
		</div>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="post clearfix py-3">
			
			<h3 class="pb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			<div class="row">
				<?php if(has_post_thumbnail()) {  the_post_thumbnail('full', 'class=col-4 w-100 h-auto'); } else { ?>
							<img class="col-4" src="<?php bloginfo('template_directory'); ?>/images/news-default.png" alt="Method Consultancy">
						<?php } ?>

				<p class="meta col-8">
					By <?php the_author_posts_link(); ?> 
					on <?php echo the_time('l, F jS, Y'); ?> 
					<a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
				</p>
			</div>
		</article>
		<?php endwhile; endif; ?>


		
		<?php get_template_part('content', 'latestnews'); ?>

    </div>

<?php get_footer(); ?>