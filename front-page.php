<?php get_header(); ?>

<section class="section-news">
	<h1>latest news</h1>
	<p>Lorem ipsum dolor sit amet consectetuer sit elit</p>
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-md-6 col-lg-4 news-card">
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/news-1.png" alt="News One"></a>
				<div class="news-card-content">
					<a href="#"><h3>Lorem ipsum dolor sit amet, consectetuer adipiscing...</h3></a>
					<p>may 25, 2019</p>
					<div class="news-card-bottom-row">
						<a href="#"><button type="button">design</button></a>
						<div>
							<small>by</small>
							<img src="<?php bloginfo('template_directory'); ?>/images/logo-sm.png" alt="Method Consultancy">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 news-card">
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/news-2.png" alt="News One"></a>
				<div class="news-card-content">
					<a href="#"><h3>Lorem ipsum dolor sit amet, consectetuer adipiscing...</h3></a>
					<p>may 25, 2019</p>
					<div class="news-card-bottom-row">
						<a href="#"><button type="button">design</button></a>
						<div>
							<small>by</small>
							<img src="<?php bloginfo('template_directory'); ?>/images/logo-sm.png" alt="Method Consultancy">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 news-card d-none d-lg-block">
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/news-3.png" alt="News One"></a>
				<div class="news-card-content">
					<a href="#"><h3>Lorem ipsum dolor sit amet, consectetuer adipiscing...</h3></a>
					<p>may 25, 2019</p>
					<div class="news-card-bottom-row">
						<a href="#"><button type="button">design</button></a>
						<div>
							<small>by</small>
							<img src="<?php bloginfo('template_directory'); ?>/images/logo-sm.png" alt="Method Consultancy">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>		<!--  /.container  -->
</section>	<!--  /.section-news  -->

<?php get_footer(); ?>