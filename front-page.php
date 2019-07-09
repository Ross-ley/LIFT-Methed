<?php get_header(); ?>

<header>
    <!-- Banner with main heading -->
    <div class="banner-large">
        <div class="front-header-content">
            <h1>marketing consultancy</h1>
            <p>Catering for all your needs to start a business.</p>
        </div> <!-- /.front-header-content -->            
            <a id="find-out-more" href="#">
                <!-- scrolls page to premotion section using JavaScipt-->
                <span>Find Out More</span>
                <i class="fas fa-chevron-down"></i>
            </a>
    </div> <!-- /.header-img-wrapper -->
</header>

<section class="section-promotion" id="find-out-more-destination">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-8 col-lg-8 promo-text text-center">
                <h3>Grow your business today without stress so you can focus on what matters</h3>
                <p>We support companies of all sizes from-start ups to multi-nationals</p>
                <p>Specialising in marketing strategy, planning and implementation we can provide you with everything
                    you need to execute your business.</p>
            </div>
            <div class="col-4 col-lg-4 d-none d-sm-block">
                <img class="rounded-circle w-100" src="<?php bloginfo('template_directory'); ?>/images/jump.png"
                    alt="Method Consultancy">
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<section class="ser-front our-services-base">
    <!-- .ser-front class used to identify services section styling specific to front page -->
    <div class="container">
        <div class="ser-title">
            <h2>Our Services</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, animi.</p>
        </div>
        <!-- 1 column mobile view, 2 column sm-md breakpoint, 4 column lg+ breapoint-->
        <div class="row">
            <!-- Digital -->
            <div class="ser-base col-12 col-sm-6 col-lg-3">
                <a class="ser-con-base" href="<?php echo get_permalink( get_page_by_title( 'Digital' ) ); ?>">
                    <span class="ser-ico-base"><i class="fas fa-handshake"></i></span>
                    <h3>Digital</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, illum!</p>
                    <span class="ser-btn">Read More</span>
                </a>
            </div>
            <!-- Consultancy -->
            <div class="ser-base col-12 col-sm-6 col-lg-3">
                <a class="ser-con-base" href="<?php echo get_permalink( get_page_by_title( 'Consultancy' ) ); ?>">
                    <span class="ser-ico-base"><i class="fas fa-desktop"></i></span>
                    <h3>Consultancy</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, impedit.</p>
                    <span class="ser-btn">Read More</span>
                </a>
            </div>
            <!-- Brand -->
            <div class="ser-base col-12 col-sm-6 col-lg-3">
                <a class="ser-con-base" href="<?php echo get_permalink( get_page_by_title( 'Brand' ) ); ?>">
                    <span class="ser-ico-base"><i class="fas fa-lightbulb"></i></span>
                    <h3>Brand</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, itaque?</p>
                    <span class="ser-btn">Read More</span>
                </a>
            </div>
            <!-- Public Relations -->
            <div class="ser-base ser col-12 col-sm-6 col-lg-3">
                <a class="ser-con-base" href="<?php echo get_permalink( get_page_by_title( 'Public Relations' ) ); ?>">
                    <span class="ser-ico-base"><i class="fas fa-bullhorn"></i></span>
                    <h3>PR</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, optio.</p>
                    <span class="ser-btn">Read More</span>
                </a>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<?php get_template_part('content', 'expertise'); ?>






<section class="section-testimonials">
    <!-- Testimials Mobile  -->
    <h2>our testimonials</h2>

    <div class="container testimonals-wrapper">
    <?php 
                    $args = array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => 3,
                    );
                    $the_query = new WP_Query( $args );
                    ?>

            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="testimonial-card row">
            <div class="testimonial-content col-md-7 col-lg-9">


                <div>
                    <!-- wrapper used to add space between text and "find out more" button -->
                    <h3>Meet <?php echo the_field("authors_name"); ?></h3>
                    <img class="d-md-none" src="<?php echo the_field("headshot"); ?>" alt="Meet Josh">
                    <p><?php echo custom_field_excerpt(); ?></p>
                </div>
                <div>
                    <a href="<?php echo get_permalink( get_page_by_title( 'Testimonials' ) ); ?>"><button>find out
                            more</button></a>
                </div>


            </div>
            <!-- Image occupies less columns from large breakpont to sale down size -->
            <div class="testimonial-img-bg col-md-5 col-lg-3 d-none d-md-block">
                <img src="<?php echo the_field("headshot"); ?>" alt="Meet Josh">
            </div>

        </div>
        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>
    </div> <!-- /.container -->
</section> <!--  /.section-testimonials  -->

<?php get_template_part('content', 'latestnews'); ?>

<?php get_template_part('content', 'contact'); ?>

<?php get_footer(); ?>