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

<section id="more" class="section-promotion">
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

<?php get_template_part('content', 'services'); ?>
		
<?php get_template_part('content', 'expertise'); ?>


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

<?php get_template_part('content', 'contact'); ?>

<?php get_footer(); ?>