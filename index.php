<?php get_header(); ?>
<!-- include header.php -->
<main>


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="orange-heading">
        <div class="container">
            <h2 class="text-left"><?php the_title(); ?></h2>
        </div>
    </div>

    <div class="container py-3">

        <?php the_content(); ?>

        <?php endwhile; else: ?>

        <div class="page-header">
            <h1>Oh no!</h1>
        </div>

        <p>We could not find this page!!!</p>

        <?php endif; ?>

    </div>

</main>
<?php get_footer(); ?>
<!-- include footer.php -->