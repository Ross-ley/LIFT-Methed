<?php get_header(); ?>

<div class="orange-heading">
    <div class="container">
        <h2 class="text-left">Contact</h2>
    </div>
</div>


<div class="contact-content" role="main">

    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>

    <div class="container contact-content-address">
        <div class="row justify-content-between">
            <div class="col-12 col-md-4">
                <h3>Contact Info</h3>
                <address>
                    <ul>
                        <li>10 Somewhere</li>
                        <li>Somewhere Street</li>
                        <li>Norfolk,</li>
                        <li>NR4 2UU</li>
                    </ul>
                </address>
                <p><span class="text-muted">Email: </span><a href="mailto:method@example.com">method@example.com</a></p>
                <p><span class="text-muted">Phone: </span><a href="tel:01493444444">01493444444</a></p>
            </div>

            <div class="d-none">
                <iframe src="https://maps.google.com/maps?q=Norwich&t=&z=15&ie=UTF8&iwloc=&output=embed" width="700"
                    height="230" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="col-12 col-md-6 text-center">
                <iframe src="https://maps.google.com/maps?q=Norwich&t=&z=15&ie=UTF8&iwloc=&output=embed" width="290"
                    height="300" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
    </div>
</div>

<div>
    <section class="section-contact">
        <div class="container">
            <h2>send us a message</h2>
            <?php echo do_shortcode( '[contact-form-7 id="51" title="Contact form 1"]' ); ?>
        </div>
    </section>
</div>


<?php get_footer(); ?>