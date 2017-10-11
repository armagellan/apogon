<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer>
			<div class="container container-footer">
				<div class="row">
				    <div class="col-lg-2 col-md-2 col-sm-6 footer-logo-center">
                        <a href="http://apogon.com.ua">
                        	<img id="footer-logo" src="<?php echo get_template_directory_uri(); ?>/images/fish_big.png" width="150" height="150" style="margin-top: 50px;">
                        </a>
						<!--<?php //if( is_front_page() ) { ?>
						    <img id="logo" src="<?php //echo get_template_directory_uri(); ?>/images/logo.png" title="Aeromax" alt="Aeromax" width="270" height="99">
					    <?php //} else { ?>
					        <a href="http://apogon.com.ua">
					            <img id="logo" src="<?php //echo get_template_directory_uri(); ?>/images/logo.png" title="Aeromax" alt="Aeromax" width="270" height="99">
					        </a>
					    <?php //} ?>-->
					</div><!-- .footer-logo-center -->
					<div class="col-lg-2 col-md-2 col-sm-6" style="height: 186px">
                        <div class="footer-ul">
							<h3>ПРО НАС</h3>
							<ul>
  			                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Головна</a></li>
  			                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>projects">Наші роботи</a></li>
                               	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">Новини</a></li>
                               	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>articles">Статті</a></li>
  			                   	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>uslugi-2">Послуги</a></li>
      			            </ul>
                        </div><!-- .footer-ul -->
					</div><!-- .col-lg-2 -->
					<div class="col-lg-3 col-md-3 col-sm-6" style="height: 186px">
                        <div class="footer-ul">
							<h3>МИ В СОЦМЕРЕЖАХ</h3>
							<?php if ( has_nav_menu( 'social' ) ) : ?>
								<nav class="social-navigation" role="navigation" aria-label="<?php _e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'social',
											'menu_class'     => 'social-links-menu',
											'depth'          => 1,
											'link_before'    => '<span class="screen-reader-text">',
											'link_after'     => '</span>',
										) );
									?>
								</nav><!-- .social-navigation -->
							<?php endif; ?>
                        </div><!-- .footer-ul -->
					</div><!-- .col-lg-3 -->
					<div class="col-lg-3 col-md-3 col-sm-6" style="height: 186px">
                        <div class="footer-ul">
							<h3>АДРЕСА</h3>
							<ul>
  			                   	<li>м.Львів</li>
  			                   	<li>вул. Б. Хмельницького</li>
  			                   	<li>apogonii@gmail.com</li>
	      			        </ul>
                        </div><!-- .footer-ul -->
					</div><!-- .col-lg-3 -->
					<div class="col-lg-2 col-md-2 col-sm-6" style="height: 186px">
                        <div class="footer-ul">
                        	<h3>ТЕЛЕФОНИ</h3>
							<ul>
  			                   	<li>‎ 067 755 52 51 </li>
  			                   	<li>‎ 067 315 35 65 </li>
	      			        </ul>
                        </div><!-- .footer-ul -->
					</div><!-- .col-lg-2 -->
					<div class="col-lg-7 col-md-7 col-sm-6 col-sx-hidden"></div><!-- .col-lg-2 -->
					<div class="col-lg-5 col-md-5 col-sm-6">
						<p style="margin-bottom: 20px; font-size: 12px;">Весь зміст, включаючи всі фото та відеоматеріали, є об’єктом авторського права. Копіювання та розміщення матеріалів на інших ресурсах без письмової згоди правовласника не допускається.</p>
					</div><!-- .col-lg-6 -->
				</div><!-- .row -->
			</div><!-- .container -->
			<div class="line-footer">
				<div class="container">
					<a id="site" 
					   href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <?php bloginfo( 'name' ); ?> © 2013-2017
					</a>
					<div id="dev">Developed by <a href="http://arus.org.ua">ARUS</a></div>
				</div><!-- .container -->
			</div><!-- .line-footer -->
				
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <!--<script src="<?php //echo get_template_directory_uri(); ?>/js/sidebar-dropdown.js"></script>-->
    <script src='<?php echo get_template_directory_uri(); ?>/js/filter.js'></script>

</body>
</html>
