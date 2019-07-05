<?php get_header(); ?>
<main>

    <div class="orange-heading">
        <div class="container">
            <h2 class="text-left">Search results for: <?php echo the_search_query(); ?></h2>
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
</main>
<?php get_footer(); ?>