<?php 
/*
	Template Name: Service Page
*/
 ?>

<?php get_header(); ?>

<div class="ser-banner overlap-nav" class="ser-banner">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <!-- <p>Catering for all your needs to start a business.</p> -->
    </div>

</div>

<section class="ser-min our-services-base d-none d-lg-block">
    <div class="container">
        <div class="ser-min-inner">
            <div class="ser-base">
                <a id="<?php if(is_page('Digital')) echo 'ser-current';?>" class="anchor ser-con-base"
                    href="<?php echo get_permalink( get_page_by_title( 'Digital' ) ); ?>">
                    <span class="ser-ico-base"><i class="fas fa-handshake"></i></span>
                    <h3>Digital</h3>
                </a>
            </div>
            <div class="ser-base">
                <a id="<?php if(is_page('Consultancy')) echo 'ser-current';?>" class="anchor ser-con-base"
                    href="<?php echo get_permalink( get_page_by_title( 'Consultancy' ) ); ?>">
                    <span class="ser-ico-base"><i class="fas fa-desktop"></i></span>
                    <h3>Consultancy</h3>
                </a>
            </div>
            <div class="ser-base">
                <a id="<?php if(is_page('Brand')) echo 'ser-current';?>" class="anchor ser-con-base"
                    href="<?php echo get_permalink( get_page_by_title( 'Brand' ) ); ?>">
                    <span class="ser-ico-base"><i class="fas fa-lightbulb"></i></span>
                    <h3>Brand</h3>
                </a>
            </div>
            <div class="ser-base">
                <a id="<?php if(is_page('Public Relations')) echo 'ser-current';?>" class="anchor ser-con-base"
                    href="<?php echo get_permalink( get_page_by_title( 'Public Relations' ) ); ?>">
                    <span class="ser-ico-base"><i class="fas fa-bullhorn"></i></span>
                    <h3>PR</h3>
                </a>
            </div>
        </div> <!-- row endof -->
    </div> <!-- container endof -->
</section>

<div class="container py-5" role="main">
    <div class="entry-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>
    </div>
</div>


    <?php get_template_part('content', 'contact'); ?>




<?php get_footer(); ?>