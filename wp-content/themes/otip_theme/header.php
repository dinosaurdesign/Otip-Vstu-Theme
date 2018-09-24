<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Otip_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><? bloginfo( 'name' ); ?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png"/>
        	<?php wp_enqueue_script( "jquery" ); ?>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<?php the_header_image_tag(); ?>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <div class="container-fluid location d-none d-md-block">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="inlinetext">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <a href="#location">Московский пр.-т-72</a>
                    </div>
                </div>
                <div class="col">
                    <div class="inlinetext">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <a href="mailto:otip@vstu.by"> otip@vstu.by</a>
                    </div>
                </div>
                <div class="col">
                    <div class="inlinetext">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <a href="tel: 8(0212)479541"> 8(0212)47-95-41</a>
                    </div>
                </div>
                <div class="col align-self-end d-md-none d-lg-block">
                    <div class="inlinetext">
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                        <a href="/wp-admin/">
							<?php
							$current_user = wp_get_current_user();
							if ( 0 == $current_user->ID ) {
								echo 'Login/ Sign in ';
							} else {
								echo 'Привет: ' . $current_user->user_login;
							}
							?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="navbar navbar-default" role="navigation">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand" href="/"><img class="logo" src="<? bloginfo( 'template_directory' ); ?>/img/otip.png" alt=""></a>
			                <?php
			                wp_nav_menu( array(
				                'theme_location'    => 'primary',
				                'depth'             => 2,
				                'container'         => 'div',
				                'container_class'   => 'collapse navbar-collapse justify-content-end',
				                'container_id'      => 'bs-example-navbar-collapse-1',
				                'menu_class'        => 'nav navbar-nav',
				                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				                'walker'            => new WP_Bootstrap_Navwalker(),
			                ) );
			                ?>

                    </nav>

            </div>
        </div>
        <!-- Все страницы кроме заглавной-->
        <div>
		    <?php if ( ! is_front_page() ):
			    include( 'template-parts/redline.php' );
		    else:
			    include 'template-parts/home_page/carousel.php';
		    endif;
		    ?>
    </header><!-- #masthead -->
    <div id="sitecontent" class="">


