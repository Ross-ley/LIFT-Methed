<?php get_header(); ?>
<div class="header-img-container">
	<div class="container">
	<h1>Marketing Consultancy</h1>
	<p>Catering for all your needs to start a business.</p>
	<a id="findOutMore" href="#">
		<p>Find Out More</p>
		<i class="fas fa-chevron-down"></i>
	</a>
	</div>
</div>

<section class="section-promotion">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-8 col-lg-8 promo-text">
				<h3>Grow your business today without stress so you can focus on what matters</h3>
				<p>We support companies of all sizes from-start ups to multi-nationals</p>
				<p>Specialising in marketing strategy, planning and implementation we can provide you with everything you need to execute your business.</p>
			</div>
			<div class="col-4 col-lg-4 d-none d-sm-block">
				<img class="promo-img" src="<?php bloginfo('template_directory'); ?>/images/jump.png" alt="Method Consultancy">
			</div>
		</div>
	</div>
</section>


<section class="our-services">
            <div class="container">
                <div class="ser-title">
                    <h2>Our Services</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, animi.</p>
                </div>
                <div class="row">
                    <div class="ser col-12 col-sm-6 col-lg-3">
						<a class="anchor ser-con" href="<?php echo get_permalink( get_page_by_title( 'Digital' ) ); ?>">
							<span class="ser-ico"><i class="fas fa-handshake"></i></span>
							<h3>Digital</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, illum!</p>
							<span class="ser-btn">Read More</span>
						</a>
					</div>
                    <div class="ser col-12 col-sm-6 col-lg-3">
						<a class="anchor ser-con" href="<?php echo get_permalink( get_page_by_title( 'Consultancy' ) ); ?>">
							<span class="ser-ico"><i class="fas fa-desktop"></i></span>
							<h3>Consultancy</h3>
							<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, impedit.</p>
							<span class="ser-btn">Read More</span>
						</a>
					</div>
                    <div class="ser col-12 col-sm-6 col-lg-3">
						<a class="anchor ser-con" href="<?php echo get_permalink( get_page_by_title( 'Brand' ) ); ?>">
							<span class="ser-ico"><i class="fas fa-lightbulb"></i></span>
							<h3>Brand</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, itaque?</p>
							<span class="ser-btn">Read More</span>
						</a>
					</div>
                    <div class="ser col-12 col-sm-6 col-lg-3">
						<a class="anchor ser-con" href="<?php echo get_permalink( get_page_by_title( 'PR' ) ); ?>">
							<span class="ser-ico"><i class="fas fa-bullhorn"></i></span>
							<h3>PR</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, optio.</p>
							<span class="ser-btn">Read More</span>
						</a>
					</div>										
                </div> <!-- row endof -->
            </div> <!-- container endof -->
        </section>

<section class="section-expertise container">
    <h2 class="d-none d-md-block">Our Expertise</h2>
    <p class="d-none d-md-block">We have clients from franchising, education and the design and manufacturing industries.</p>
    <div class="row d-none d-md-flex">
		<img class="col-3" src="<?php bloginfo('template_directory'); ?>/images/bite.png" alt="Method Consultancy">
		<img class="col-3" src="<?php bloginfo('template_directory'); ?>/images/franchise.png" alt="Method Consultancy">
		<img class="col-3" src="<?php bloginfo('template_directory'); ?>/images/weld.png" alt="Method Consultancy">
		<img class="col-3" src="<?php bloginfo('template_directory'); ?>/images/pen.png" alt="Method Consultancy">
	</div>
    <div class="d-md-none">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php bloginfo('template_directory'); ?>/images/bite.png" class="d-block w-100"
                        alt="Method Consultancy">
                    <div class="carousel-caption">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php bloginfo('template_directory'); ?>/images/franchise.png" class="d-block w-100"
                        alt="Method Consultancy">
                    <div class="carousel-caption">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php bloginfo('template_directory'); ?>/images/weld.png" class="d-block w-100"
                        alt="Method Consultancy">
                    <div class="carousel-caption">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<section class="section-testimonials">
	<!-- Testimials Mobile  -->
	<h2>our testimonials</h2>

	<div class="container">
		<div class="testimonial-card row">
			<div class="testimonial-content col-md-7 col-lg-9 d-flex flex-column">
				<div>
					<h3>Meet Josh</h3>
					<img  class="d-md-none" src="<?php bloginfo('template_directory'); ?>/images/Josh.png" alt="Meet Josh">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolores veritatis minima, corporis a tenetur consequuntur quas delectus nemo nulla sequi eaque quam magni. Dignissimos deleniti eligendi aperiam possimus</p>
				</div>
				<a href="<?php echo get_permalink( get_page_by_title( 'Testimonials' ) ); ?>"><button>find out more</button></a>
			</div>
			<div class="testimonial-img-bg col-md-5 col-lg-3 d-none d-md-block">
				<img  src="<?php bloginfo('template_directory'); ?>/images/Josh.png" alt="Meet Josh">
			</div>
		</div>
		<div class="testimonial-card row testimonial-img-left">
			<div class="testimonial-content col-md-7 col-lg-9 d-flex flex-column">
				<div>
					<h3>Meet Clair</h3>
					<img  class="d-md-none" src="<?php bloginfo('template_directory'); ?>/images/Clair.png" alt="Meet Josh">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolores veritatis minima, corporis a tenetur consequuntur quas delectus nemo nulla sequi eaque quam magni. Dignissimos deleniti eligendi aperiam possimus</p>
				</div>
				<a href="<?php echo get_permalink( get_page_by_title( 'Testimonials' ) ); ?>"><button>find out more</button></a>
			</div>
			<div class="testimonial-img-bg col-md-5 col-lg-3 d-none d-md-block">
				<img  src="<?php bloginfo('template_directory'); ?>/images/Clair.png" alt="Meet Josh">
			</div>
		</div>
		<div class="testimonial-card row">
			<div class="testimonial-content col-md-7 col-lg-9 d-flex flex-column">
				<div>
					<h3>Meet Ryan</h3>
					<img  class="d-md-none" src="<?php bloginfo('template_directory'); ?>/images/Ryan.png" alt="Meet Josh">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolores veritatis minima, corporis a tenetur consequuntur quas delectus nemo nulla sequi eaque quam magni. Dignissimos deleniti eligendi aperiam possimus</p>
				</div>
				<a href="<?php echo get_permalink( get_page_by_title( 'Testimonials' ) ); ?>"><button>find out more</button></a>
			</div>
			<div class="testimonial-img-bg col-md-5 col-lg-3  d-none d-md-block">
				<img  src="<?php bloginfo('template_directory'); ?>/images/Ryan.png" alt="Meet Josh">
			</div>
		</div>		

	</div>
</section> 	<!--  /.section-testimonials  -->

<?php get_template_part('content', 'latestnews'); ?>

<section class="section-contact">
	<div class="container">
		<h2>contact us today</h2>
		<?php echo do_shortcode( '[contact-form-7 id="51" title="Contact form 1"]' ); ?>
	</div>
</section>

<?php get_footer(); ?>