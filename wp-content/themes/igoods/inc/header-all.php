//add_action( 'igoods_header', 'igoods_header_container', 0 );
//add_action( 'igoods_header', 'igoods_skip_links', 5 );
//add_action( 'igoods_header', 'igoods_site_branding', 20 );
//add_action( 'igoods_header', 'igoods_secondary_navigation', 30 );
//add_action( 'igoods_header', 'igoods_header_container_close', 41 );
//add_action( 'igoods_header', 'igoods_primary_navigation_wrapper', 42 );
//add_action( 'igoods_header', 'igoods_primary_navigation', 50 );
//add_action( 'igoods_header', 'igoods_primary_navigation_wrapper_close', 68 );

   86: add_action( 'igoods_header', 'igoods_product_search', 40 );
   87: add_action( 'igoods_header', 'igoods_header_cart', 60 );

<div class="col-full">
	<a class="skip-link screen-reader-text" href="#site-navigation"><?php esc_attr_e( 'Skip to navigation', 'igoods' ); ?></a>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_attr_e( 'Skip to content', 'igoods' ); ?></a>
	<div class="site-branding">
		<?php igoods_site_title_or_logo(); ?>
	</div>

	<div class="site-search">
		<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
	</div>	
</div>

<div class="igoods-primary-navigation">
	<div class="col-full">
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'igoods' ); ?>">
		<button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span><?php echo esc_attr( apply_filters( 'igoods_menu_toggle_text', __( 'Menu', 'igoods' ) ) ); ?></span></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'primary-navigation',
				)
			);

			wp_nav_menu(
				array(
					'theme_location'  => 'handheld',
					'container_class' => 'handheld-navigation',
				)
			);
			?>
		</nav><!-- #site-navigation -->


<?php
		if ( igoods_is_woocommerce_activated() ) {
			if ( is_cart() ) {
				$class = 'current-menu-item';
			} else {
				$class = '';
			}
			?>
		<ul id="site-header-cart" class="site-header-cart menu">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php igoods_cart_link(); ?>
			</li>
			<li>
				<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
			</li>
		</ul>
				
	</div>
</div>