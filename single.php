<?php get_header(); ?>

<div class="orange-heading">
    <div class="container">
        <h2 class="text-left"><?php the_title(); ?></h2>
    </div>
</div>

<section class="article-content">
    <div class="container" role="main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <p class="text-center"><?php the_post_thumbnail('large'); ?></p>

        <p>
            <small><?php echo the_time('F jS, Y'); ?></small>
        </p>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>

    </div>
</section>

<?php get_template_part('content', 'latestnews'); ?>

<?php get_template_part('content', 'contact'); ?>

<?php get_footer(); ?>