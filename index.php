<?php get_header(); ?>	 <!-- include header.php -->

    <div class="container" role="main">

	    <div class="row">

	    	<div class="col-md-8">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
				    <div class="page-header">	
				    	<h1><?php the_title(); ?></h1>
				    </div>


					<?php the_content(); ?>

				<?php endwhile; else: ?>

					<div class="page-header">	
				    	<h1>Oh no!</h1>
				    </div>

				    <p>We could not find this page!!!</p>

				<?php endif; ?>

	    	</div>

	    	<?php get_sidebar(); ?>	<!-- include sidebar.php -->

	    </div>

    </div>

<?php get_footer(); ?> <!-- include footer.php -->