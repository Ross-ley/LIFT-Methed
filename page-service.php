<?php 
/*
	Template Name: Service Page
*/

 ?>
<?php get_header(); ?>

<section class="ser-min our-services">
    <div class="container">
        <div class="ser-min-inner">
            <div class="ser">
                <a id="<?php if(is_page('Digital')) echo 'ser-current';?>" class="anchor ser-con"
                    href="<?php echo get_permalink( get_page_by_title( 'Digital' ) ); ?>">
                    <span class="ser-ico"><i class="fas fa-handshake"></i></span>
                    <h3>Digital</h3>
                </a>
            </div>
            <div class="ser">
                <a id="<?php if(is_page('Consultancy')) echo 'ser-current';?>" class="anchor ser-con"
                    href="<?php echo get_permalink( get_page_by_title( 'Consultancy' ) ); ?>">
                    <span class="ser-ico"><i class="fas fa-desktop"></i></span>
                    <h3>Consultancy</h3>
                </a>
            </div>
            <div class="ser">
                <a id="<?php if(is_page('Brand')) echo 'ser-current';?>" class="anchor ser-con"
                    href="<?php echo get_permalink( get_page_by_title( 'Brand' ) ); ?>">
                    <span class="ser-ico"><i class="fas fa-lightbulb"></i></span>
                    <h3>Brand</h3>
                </a>
            </div>
            <div class="ser">
                <a id="<?php if(is_page('PR')) echo 'ser-current';?>" class="anchor ser-con"
                    href="<?php echo get_permalink( get_page_by_title( 'PR' ) ); ?>">
                    <span class="ser-ico"><i class="fas fa-bullhorn"></i></span>
                    <h3>PR</h3>
                </a>
            </div>
        </div> <!-- row endof -->
    </div> <!-- container endof -->
</section>

<div class="container py-5" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="service-header">
        <h1><?php the_title(); ?></h1>
    </div>

    <?php the_content(); ?>

    <?php endwhile; endif; ?>


    <?php get_template_part('content', 'expertise'); ?>


</div>

<?php get_footer(); ?>