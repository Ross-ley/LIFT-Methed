<?php get_header(); ?>

<div class="orange-heading">
    <div class="container">
        <h2 class="text-left">News Post category: <?php wp_title( '' ); ?></h2>
    </div>
</div>

<div class="my-search-results" >
        <div class="container">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h3 class="text-left"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    <?php the_excerpt(); ?>

                    <p class="search-results-link"><a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></p>
                <?php endwhile; else: ?>

                <p>No results were found.</p>

                <?php endif; ?>

        </div>
    </div>

<?php get_template_part('content', 'latestnews'); ?>

<?php get_footer(); ?>