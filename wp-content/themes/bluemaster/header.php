<!DOCTYPE html>
<html lang=" <?php language_attributes(); ?>" class="no-js"> 
    <head>
    	<!-- meta character set -->
        <meta charset="<?php bloginfo('charset'); ?>">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Blue One Page HTML Template</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>

    </head>
	
    <body id="body" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="<?php echo esc_url( home_url( ‘/’ ) ); ?>"><?php echo esc_attr( get_bloginfo( ‘name’, ‘display’ ) ); ?></a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <?php
                          $header_menu = array(
                              'theme_location'  => 'header_menus',
                              'menu_class' => 'nav navbar-nav',
                              'menu_id' => 'nav',
                              'active_class' => 'active',
                          );
                          wp_nav_menu($header_menu);
                          ?>
                   
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>