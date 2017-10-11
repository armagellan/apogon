<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Apogon" >
    <meta name="description" content="Apogon" >
	<link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>
        <div id="top-menu">
            <div class="container">
                <div class="row">
	      			<div class="col-lg-10 col-md-10 col-sm-8 top-menu-left">
	      			    <ul >
	      			        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about">Про нас</a></li>
	      			        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>projects">Наші роботи</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>uslugi-2">Послуги</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">Новини</a></li>
	      			        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contacts">Контакти</a></li>
	      			    </ul>
	      			</div><!-- .top-menu-left-->
	      			<div class="col-lg-2 col-md-2 col-sm-4 top-menu-right">
	      			    <!--<ul>
	      			        <li><a class="language-on" href="#">PL</a></li>
	      			        <li><a href="http://apogon.com.ua/en">EN</a></li>
	      			        <li><a href="http://apogon.com.ua/ru" >RU</a></li>
	      			    </ul>-->
	      			</div><!-- .top-menu-right-->
	      		</div><!-- .row-->
	      	</div><!-- .container -->
        </div><!-- #top-menu -->

		<!-- Create by Vlad -->
        <div id="top-menu-mobile">
            <div class="container">
                <div class="row">
	      			<div class="col-sm-3 col-xs-3 top-menu-left">
                        <a class="sidebar-toggle open">
                            <div class="dashicons dashicons-menu"></div>
                        </a>  
	      			</div><!-- .top-menu-left-->
	      			<!--<div class="col-sm-9 col-xs-9 top-menu-right">
	      			    <ul>
	      			        <li><a href="#">PL</a></li>
	      			        <li><a href="#">EN</a></li>
	      			        <li><a class="language-on" href="#">RU</a></li>
	      			    </ul>
	      			</div>-->
	      		</div><!-- .row-->
	      	</div><!-- .container -->
        </div><!-- #top-menu -->
        <div id="mobile-sidebar">
		    <a href="http://apogon.com.ua">
			 	<img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-new.png" title="Apogon" alt="Apogon" width="270" height="99">
		    </a>
  			<div class="top-menu-mobile">
  			    <ul >
  			        <li><a class="menu-mobile" href="<?php echo esc_url( home_url( '/' ) ); ?>about">Про нас</a></li>
  			        <li><a class="menu-mobile" href="<?php echo esc_url( home_url( '/' ) ); ?>nprojects">Наші роботи</a></li>
                    <li><a class="menu-mobile" href="<?php echo esc_url( home_url( '/' ) ); ?>uslugi-2">Послуги</a></li>
                    <li><a class="menu-mobile" href="<?php echo esc_url( home_url( '/' ) ); ?>news">Новини</a></li>
  			        <li><a class="menu-mobile" href="<?php echo esc_url( home_url( '/' ) ); ?>contacts">Контакти</a></li>

                    <div class="container-fluid menu-general-mobile"></div>

  			        <!--<li><a class="menu-mobile" href="<?php //echo esc_url( home_url( '/' ) ); ?>kamery">Kamera</a></li>
  			        <li><a class="menu-mobile" href="<?php //echo esc_url( home_url( '/' ) ); ?>agregaty-2">Agregaty</a></li>
  			        <li><a class="menu-mobile" href="<?php //echo esc_url( home_url( '/' ) ); ?>stantsii">Stacja</a></li>
                    <li><a class="menu-mobile" href="<?php //echo esc_url( home_url( '/' ) ); ?>kompresory-2">Kompresory</a></li>
                    <li><a class="menu-mobile" href="<?php //echo esc_url( home_url( '/' ) ); ?>chillery">Chillery</a></li>
  			        <li><a class="menu-mobile" href="<?php //echo esc_url( home_url( '/' ) ); ?>vozduhoohladiteli">Chłodnice</a></li>
                    <li><a class="menu-mobile" href="<?php //echo esc_url( home_url( '/' ) ); ?>kondensatory">Kondensatory</a></li>
                    <li><a class="menu-mobile" href="<?php //echo esc_url( home_url( '/' ) ); ?>avtomatika">Automatyzacja</a></li>-->
  			    </ul>
  			</div><!-- .top-menu-mobile -->
        	<div class="search-widget-area-mobile">
        		<div>
		        	<?php if (!dynamic_sidebar("search-widget-area") ) : ?> 
					<!-- віджет пошуку -->
					<?php endif; ?>	
	        	</div>
	        </div><!-- .search-widget-area-mobile -->
        </div><!-- #mobile-sidebar -->
		<!-- / Create by Vlad -->

		<header id="masthead" class="site-header container" role="banner">
      		<div class="row">
      			<div class="col-lg-3 col-md-3 col-sm-7">
      			    <?php if( is_front_page() ) { ?>
					    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-new.png" title="Apogon" alt="Apogon" width="270" height="99">
				    <?php } else { ?>
				        <a href="http://apogon.com.ua">
				            <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-new.png" title="Apogon" alt="Apogon" width="270" height="99">
				        </a>
				    <?php } ?>
		        </div><!-- .col-lg-3 -->
			    <div class="col-lg-9 col-md-9 col-sm-5 ">
        			<div class="col-lg-8 col-md-9 col-sm-12 col-xs-6">
			        	<div id="contacts">
			        		<!-- Create by Vlad -->
                            <div class="col-lg-1 hidden-md-down"></div>
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <div id="telefone"> 067 755 52 51 <br>‎067 315 35 65 </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-5">
                                    <div id="email"> apogonii@gmail.com  </div>
                            </div>
					    </div><!-- #contacts -->
					</div><!-- .col-lg-8 -->
		        	<div class="col-lg-4 col-md-3 col-sm-12 col-xs-6 search-widget-area-right">
		        		<div>
				        	<?php if (!dynamic_sidebar("search-widget-area") ) : ?>
							<!-- віджет пошуку -->
							<?php endif; ?>
			        	</div>
			        </div><!-- .search-widget-area-right -->
				</div><!-- .col-lg-9 -->
				<!-- Create by Vlad -->
                <div id="contacts-adaptive">
                    <div>
                        <div id="telefone"> ‎067 755 52 51 <br>‎ 067 315 35 65 </div>
                        <div id="email"> apogonii@gmail.com  </div>
                    </div>
				</div><!-- #contacts-adaptive -->
                <!-- End Create by Vlad -->       
				<!-- Menu -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">		    	
					<!--<button id="menu-toggle" class="menu-toggle"><?php //_e( 'Menu', 'twentysixteen' ); ?></button>-->
					<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<nav id="site-navigation" class="main-navigation navbar navbar-default menu" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_class'     => 'primary-menu',
								 ) );
							?>
						</nav><!-- .main-navigation -->
					<?php endif; ?>	
				</div><!-- .col-lg-12 -->
			</div><!-- .row -->
		</header><!--.site-header -->
	
		<!--  Create by Vlad  -->
		<div class="container-fluid menu-general"></div>
		<!--  End  Create by Vlad  -->

		<?php if ( is_front_page() ) : ?>
			<div class="container-fluid menu-general slider-home">
                <?php echo do_shortcode('[rev_slider home]');?>
            </div>
		<?php endif; ?>

		<div id="content" class="site-content container">
