<?php get_header(); ?>

<div class="container" role="main">

    <div class="row">

        <div class="col-md-8">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="page-header">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p class="meta">
                    <?php echo the_time('F jS, Y'); ?>
                </p>
            </div>

            <p><?php the_post_thumbnail('medium'); ?></p>

            <?php the_content(); ?>

            <hr>

            <?php endwhile; endif; ?>

        </div>

        <?php get_sidebar( ); ?>

    </div>

</div>

<?php get_footer(); ?>