<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php echo get_bloginfo('name'); ?></title> 
    
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <div class="navbar navbar-default nav-bar" role="navigation">
      <div class="container">
      <img src="img/Method.png" alt="logo">
        <?php 
          $args = array(
          	'menu'        => 'header-menu',            
            'menu_class'  => 'nav navbar-nav',
            'container'   => false
          );
          wp_nav_menu( $args );
        ?>  
      </div>  <!--  /.container  -->
    </div>


