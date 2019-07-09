<?php get_header(); ?>

<div class="orange-heading">
    <div class="container">
        <h2 class="text-left">testimonials</h2>
    </div>
</div>

<section class="section-testimonials">

    <div class="container">
        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean
                        dignissim pellentesque felis.</p>
        <div class="testimonial-card row">
            <!-- Josh -->
            <div class="testimonial-content col-md-7 col-lg-9 ">
                <div>
                    <!-- wrapper used to add space between text and "find out more" button -->
                    <h3>Meet Josh</h3>
                    <img class="d-md-none" src="<?php bloginfo('template_directory'); ?>/images/Josh.png"
                        alt="Meet Josh">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                        eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit,
                        posuere a, pede.

                        Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean
                        dignissim pellentesque felis.

                        Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies
                        in, diam. Sed arcu. Cras consequat.

                        Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros
                        eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis
                        luctus, metus.

                        Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem
                        tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>
                </div>
            </div>
            <!-- Image occupies less columns from large breakpont to sale down size -->
            <div class="p-0 col-md-5 col-lg-3 d-none d-md-block ">
                <img class="rounded-0" src="<?php bloginfo('template_directory'); ?>/images/Josh.png" alt="Meet Josh">
            </div>
        </div>
        <div class="testimonial-card row testimonial-img-left">
            <!-- Clair -->
            <div class="testimonial-content col-md-7 col-lg-9">
                <div>
                    <h3>Meet Clair</h3>
                    <img class="d-md-none" src="<?php bloginfo('template_directory'); ?>/images/Clair.png"
                        alt="Meet Josh">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                        eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit,
                        posuere a, pede.

                        Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean
                        dignissim pellentesque felis.

                        Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies
                        in, diam. Sed arcu. Cras consequat.

                        Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros
                        eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis
                        luctus, metus.

                        Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem
                        tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>
                </div>
            </div>
            <div class="p-0 col-md-5 col-lg-3 d-none d-md-block">
                <img class="rounded-0" src="<?php bloginfo('template_directory'); ?>/images/Clair.png" alt="Meet Josh">
            </div>
        </div>
        <div class="testimonial-card row">
            <!-- Ryan -->
            <div class="testimonial-content col-md-7 col-lg-9">
                <div>
                    <h3>Meet Ryan</h3>
                    <img class="d-md-none" src="<?php bloginfo('template_directory'); ?>/images/Ryan.png"
                        alt="Meet Josh">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                        eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit,
                        posuere a, pede.

                        Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean
                        dignissim pellentesque felis.

                        Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies
                        in, diam. Sed arcu. Cras consequat.

                        Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros
                        eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis
                        luctus, metus.

                        Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem
                        tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>
                </div>
            </div>
            <div class="p-0 col-md-5 col-lg-3  d-none d-md-block">
                <img class="rounded-0" src="<?php bloginfo('template_directory'); ?>/images/Ryan.png" alt="Meet Josh">
            </div>
        </div>
    </div> <!-- /.container -->
</section> <!--  /.section-testimonials  -->

<?php get_template_part('content', 'contact'); ?>

<?php get_footer(); ?>