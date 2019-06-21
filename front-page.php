<?php get_header(); ?>

    <div class="container text-center bg-info text-white p-4">
		<h1 class="display-1">News</h1>
		<p class="lead">Article</p>

		<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="Test field" aria-label="Test field" aria-describedby="button-addon2">
			<div class="input-group-append">
				<button class="btn btn-primary" type="button" id="button-addon2">Button</button>
			</div>
		</div>
    </div>

	<div class="container news-cards">
		<div class="row my-5">
			<div class="col-md">
				<img class="img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/images/news-1.png" alt="News One">
				<h5>Lorem ipsum dolor sit amet, consectetuer adipiscing...</h5>
				<button type="button" class="btn btn-primary btn-sm text-uppercase">deign</button>
			</div>
			<div class="col-md">
				<img class="img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/images/news-2.png" alt="News Two">
				<h5>Lorem ipsum dolor sit amet, consectetuer adipiscing...</h5>
				<button type="button" class="btn btn-primary btn-sm text-uppercase">digital</button>
			</div>
			<div class="col-md">
				<img class="img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/images/news-3.png" alt="News Three">
				<h5>Lorem ipsum dolor sit amet, consectetuer adipiscing...</h5>
				<button type="button" class="btn btn-primary btn-sm text-uppercase">education</button>
			</div>
		</div>
	</div>	<!--  /.container  -->
	

<?php get_footer(); ?>