<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php echo get_bloginfo('name'); ?></title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <!--  Bootstrap collapsing navbar. Burger menu used by default. Navigation links used from large breakpoint and bigger.   -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <nav class="container">
            <!-- Method logo -->
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="navbar-logo"
                    src="<?php bloginfo('template_directory'); ?>/images/Method.png" alt="Logo"></a>
            <!-- Contents of .collapse div is displayed vertically underneath nav bar when burger menu is clicked.
                    And horizintally along of the nav bar from the large breakpont and bigger. -->
            <div class="collapse navbar-collapse container" id="navbarCollapse">
                <?php 
            $args = array(
                'menu'        => 'header-menu',            
                'menu_class'  => 'navbar-nav mr-auto text-center',
                'container'   => false
            );
            wp_nav_menu( $args );
        ?>
                <!--  Search bar and button  -->
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="button-search my-2 my-sm-0" type="submit"><i class="fas fa-search fa-2x"
                            onclick="myFunction()"></i></button>
                </form>
            </div>  <!--  /.collapse   -->
        </nav> <!--  /.container   -->
        <!--  Burger menu button   -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
    </nav>