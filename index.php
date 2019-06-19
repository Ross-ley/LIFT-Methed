<?php get_header(); ?>

<section>
    <div>

    <h1>MY HEADER</h1>

        <div class="cards-container">
            <!-- LOOP START -->
            <?php 

                $args = array(
                    'post_type' => 'latest_news'
                );
                $query = new WP_Query( $args );

            ?>

            <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

            <div class="card">
            <img src="<?php the_field('image'); ?>" alt="image"></p>        
            <p><?php the_field('content'); ?></p>        

            </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
            <!-- LOOP END -->
        <div class="cards-container">

    </div>
</section>

<?php get_footer(); ?>


<!-- <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="card">
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>        
</div>
<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?> -->