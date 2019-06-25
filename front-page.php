<?php get_header(); ?>
<section class="our-services">
            <div class="container">
                <div class="ser-title">
                    <h1>Our Services</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, animi.</p>
                </div>
                <div class="row">
                    <div class="ser col-12 col-sm-6 col-lg-3"><a class="d-block" href="#">
                        <div class="ser-con"> <!-- inner wrapper for easier background and spacing -->
                            <div class="ser-ico"><i class="fas fa-handshake"></i></div>
                            <h3>Consultancy</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, illum!</p>
                            <div href="#" class="ser-btn">Read More</div>
						</a></div>
                    </div>
                    <div class="ser col-12 col-sm-6 col-lg-3"><a class="d-block" href="#">
                        <div class="ser-con"> <!-- inner wrapper for easier background and spacing -->
                            <div class="ser-ico"><i class="fas fa-desktop"></i></div>
                            <h3>Digital</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, impedit.</p>
                            <div href="#" class="ser-btn">Read More</div>
							</a></div>
                    </div>
                    <div class="ser col-12 col-sm-6 col-lg-3"><a class="d-block" href="#">
                        <div class="ser-con"> <!-- inner wrapper for easier background and spacing -->
                            <div class="ser-ico"><i class="fas fa-lightbulb"></i></div>
                            <h3>Brand</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, itaque?</p>
                            <div href="#" class="ser-btn">Read More</div>
							</a></div>
                    </div>
                    <div class="ser col-12 col-sm-6 col-lg-3"><a class="d-block" href="#">
                        <div class="ser-con"> <!-- inner wrapper for easier background and spacing -->
                            <div class="ser-ico"><i class="fas fa-bullhorn"></i></div>
                            <h3>PR</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, optio.</p>
                            <div href="#" class="ser-btn">Read More</div>
							</a></div>
                    </div>
                </div> <!-- row endof -->
            </div> <!-- container endof -->
        </section>

<section class="section-expertise container">
    <h1 class="d-none d-md-block">Our Expertise</h1>
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
	<h1>our testimonials</h1>

	<div class="container">
		<div class="testimonial-card row">
			<div class="testimonial-content col-md-7 col-lg-9">
				<h2>Meet Josh</h2>
				<img  class="d-md-none" src="<?php bloginfo('template_directory'); ?>/images/Josh.png" alt="Meet Josh">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolores veritatis minima, corporis a tenetur consequuntur quas delectus nemo nulla sequi eaque quam magni. Dignissimos deleniti eligendi aperiam possimus</p>
				<button>find out more</button>
			</div>
			<div class="testimonial-img-bg col-md-5 col-lg-3 d-none d-md-block">
				<img  src="<?php bloginfo('template_directory'); ?>/images/Josh.png" alt="Meet Josh">
			</div>
		</div>
		<div class="testimonial-card row testimonial-img-left">
			<div class="testimonial-content col-md-7 col-lg-9">
				<h2>Meet Clair</h2>
				<img  class="d-md-none" src="<?php bloginfo('template_directory'); ?>/images/Clair.png" alt="Meet Josh">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolores veritatis minima, corporis a tenetur consequuntur quas delectus nemo nulla sequi eaque quam magni. Dignissimos deleniti eligendi aperiam possimus</p>
				<button>find out more</button>
			</div>
			<div class="testimonial-img-bg col-md-5 col-lg-3 d-none d-md-block">
				<img  src="<?php bloginfo('template_directory'); ?>/images/Clair.png" alt="Meet Josh">
			</div>
		</div>
		<div class="testimonial-card row">
			<div class="testimonial-content col-md-7 col-lg-9">
				<h2>Meet Ryan</h2>
				<img  class="d-md-none" src="<?php bloginfo('template_directory'); ?>/images/Ryan.png" alt="Meet Josh">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolores veritatis minima, corporis a tenetur consequuntur quas delectus nemo nulla sequi eaque quam magni. Dignissimos deleniti eligendi aperiam possimus</p>
				<button>find out more</button>
			</div>
			<div class="testimonial-img-bg col-md-5 col-lg-3  d-none d-md-block">
				<img  src="<?php bloginfo('template_directory'); ?>/images/Ryan.png" alt="Meet Josh">
			</div>
		</div>		

	</div>
</section> 	<!--  /.section-testimonials  -->

<section class="section-news">
	<h1>latest news</h1>
	<p class="d-none d-md-block">Lorem ipsum dolor sit amet consectetuer sit elit</p>	<!--  sub heading  -->
	<div class="container">
		<div class="row justify-content-between">	<!--  0 width: single column, md width: two column, lg width: thee column -->
			<div class="col-md-6 col-lg-4 news-card">	
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/news-1.png" alt="News One"></a>
				<div class="news-card-content">
					<a href="#"><h3>Lorem ipsum dolor sit amet, consectetuer adipiscing...</h3></a>
					<p>may 25, 2019</p>
					<div class="news-card-bottom-row">	<!--  wrapper to add space between elements  -->
						<a href="#"><button type="button">design</button></a>
						<div>
							<small>by</small>
							<img src="<?php bloginfo('template_directory'); ?>/images/logo-sm.png" alt="Method Consultancy">
						</div>
					</div>
				</div>
			</div>	<!--  ./col  -->
			<div class="col-md-6 col-lg-4 news-card">
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/news-2.png" alt="News One"></a>
				<div class="news-card-content">
					<a href="#"><h3>Lorem ipsum dolor sit amet, consectetuer adipiscing...</h3></a>
					<p>may 25, 2019</p>
					<div class="news-card-bottom-row">
						<a href="#"><button type="button">education</button></a>
						<div>
							<small>by</small>
							<img src="<?php bloginfo('template_directory'); ?>/images/logo-sm.png" alt="Method Consultancy">
						</div>
					</div>
				</div>
			</div>	<!--  ./col  -->
			<div class="col-lg-4 news-card d-none d-lg-block">
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/news-3.png" alt="News One"></a>
				<div class="news-card-content">
					<a href="#"><h3>Lorem ipsum dolor sit amet, consectetuer adipiscing...</h3></a>
					<p>may 25, 2019</p>
					<div class="news-card-bottom-row">
						<a href="#"><button type="button">digital</button></a>
						<div>
							<small>by</small>
							<img src="<?php bloginfo('template_directory'); ?>/images/logo-sm.png" alt="Method Consultancy">
						</div>
					</div>
				</div>
			</div>	<!--  ./col  -->
		</div>	<!--  ./row  -->
	</div>	<!--  /.container  -->
</section>	<!--  /.section-news  -->

<?php get_footer(); ?>