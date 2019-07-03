<?php get_header(); ?>

<div class="container" role="main">

    <h1>LINK TO ALL NEWS</h1>

    <div class="row">


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

</div>

<?php get_footer(); ?>