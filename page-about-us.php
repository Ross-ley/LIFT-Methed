<?php get_header(); ?>
<div class="grey-back">
    <div class="container grey-back" role="main">
        <div class="row">
            <div class="col-md-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="page-header">
                    <h1><?php the_title(); ?></h1>
                </div>

                <div class="content-img">
                    <?php the_content();?>
                    <span class="imgtest">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/franchise.png" />
                    </span>
                </div>

                <?php endwhile; endif; ?>

            </div>

        </div>

    </div>
</div>
<div>
    <div class="mid-section" role="main">
        <div>
            <h2 class="sub-title">What we do</h2>
            <div class="about-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/franchise.png" />
            </div>
            <div class="mid-section-inline">
                <div class="section-1">
                    <h3>Lorem ipsum</h3>
                    <p class="WE">Finibus at condimentum sed, suscipit euismod leo. Class aptent taciti sociosqu ad
                        litora torquent per conubia nostra, per inceptos himenaeos. Phasellus iaculis massa quis nulla
                        euismod, at accumsan magna tempor. Mauris porttitor dui ut augue feugiat, ut egestas libero
                        accumsan. Integer quam magna, semper vitae magna at, accumsan commodo turpis. Sed porta eu augue
                        id accumsan.</p>
                </div>
                <div class="section-2">
                    <h3>Lorem ipsum</h3>
                    <p class="WE">Finibus at condimentum sed, suscipit euismod leo. Class aptent taciti sociosqu ad
                        litora torquent per conubia nostra, per inceptos himenaeos. Phasellus iaculis massa quis nulla
                        euismod, at accumsan magna tempor. Mauris porttitor dui ut augue feugiat, ut egestas libero
                        accumsan. Integer quam magna, semper vitae magna at, accumsan commodo turpis. Sed porta eu augue
                        id accumsan.</p>
                </div>
                <div class="section-3">
                    <h3>Lorem ipsum</h3>
                    <p class="WE">Finibus at condimentum sed, suscipit euismod leo. Class aptent taciti sociosqu ad
                        litora torquent per conubia nostra, per inceptos himenaeos. Phasellus iaculis massa quis nulla
                        euismod, at accumsan magna tempor. Mauris porttitor dui ut augue feugiat, ut egestas libero
                        accumsan. Integer quam magna, semper vitae magna at, accumsan commodo turpis. Sed porta eu augue
                        id accumsan.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="grey-back grey-space">
    <div class="mid-section" role="main">
        <div>
            <h2 class="sub-title">How we can help</h2>
            <div class="mid-section-inline">
                <div>
                    <h3>Lorem ipsum</h3>
                    <p class="col-12 WE">Finibus at condimentum sed, suscipit euismod leo. Class aptent taciti sociosqu
                        ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus iaculis massa quis
                        nulla euismod, at accumsan magna tempor. Mauris porttitor dui ut augue feugiat, ut egestas
                        libero accumsan. Integer quam magna, semper vitae magna at, accumsan commodo turpis. Sed porta
                        eu augue id accumsan.</p>
                </div>
                <div>
                    <h3>Lorem ipsum</h3>
                    <p class="col-12 WE">Finibus at condimentum sed, suscipit euismod leo. Class aptent taciti sociosqu
                        ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus iaculis massa quis
                        nulla euismod, at accumsan magna tempor. Mauris porttitor dui ut augue feugiat, ut egestas
                        libero accumsan. Integer quam magna, semper vitae magna at, accumsan commodo turpis. Sed porta
                        eu augue id accumsan.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('content', 'contact'); ?>

<?php get_footer(); ?>