<?php
/**
 * WooCommerce Template Functions.
 *
 * @package igoods
 */

if ( ! function_exists( 'igoods_before_content' ) ) {
	/**
	 * Before Content
	 * Wraps all WooCommerce content in wrappers which match the theme markup
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function igoods_before_content() {
		?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
		<?php
	}
}

if ( ! function_exists( 'igoods_after_content' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function igoods_after_content() {
		?>
			</main><!-- #main -->
		</div><!-- #primary -->

		<?php
		do_action( 'igoods_sidebar' );
	}
}

if ( ! function_exists( 'igoods_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments
	 * Ensure cart contents update when products are added to the cart via AJAX
	 *
	 * @param  array $fragments Fragments to refresh via AJAX.
	 * @return array            Fragments to refresh via AJAX
	 */
	function igoods_cart_link_fragment( $fragments ) {
		global $woocommerce;

		ob_start();
		igoods_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		ob_start();
		igoods_handheld_footer_bar_cart_link();
		$fragments['a.footer-cart-contents'] = ob_get_clean();

		return $fragments;
	}
}

if ( ! function_exists( 'igoods_cart_link' ) ) {
	/**
	 * Cart Link
	 * Displayed a link to the cart including the number of items present and the cart total
	 *
	 * @return void
	 * @since  1.0.0
	 */
	function igoods_cart_link() {
		?>
			<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'igoods' ); ?>">
				<?php /* translators: %d: number of items in cart */ ?>
				<?php echo wp_kses_post( WC()->cart->get_cart_subtotal() ); ?> <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'igoods' ), WC()->cart->get_cart_contents_count() ) ); ?></span>
			</a>
		<?php
	}
}

if ( ! function_exists( 'igoods_product_search' ) ) {
	/**
	 * Display Product Search
	 *
	 * @since  1.0.0
	 * @uses  igoods_is_woocommerce_activated() check if WooCommerce is activated
	 * @return void
	 */
	function igoods_product_search() {
		if ( igoods_is_woocommerce_activated() ) {
			?>
			<div class="site-search">
				<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
			</div>
			<?php
		}
	}
}

if ( ! function_exists( 'igoods_header_cart' ) ) {
	/**
	 * Display Header Cart
	 *
	 * @since  1.0.0
	 * @uses  igoods_is_woocommerce_activated() check if WooCommerce is activated
	 * @return void
	 */
	function igoods_header_cart() {
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
			<?php
		}
	}
}

if ( ! function_exists( 'igoods_upsell_display' ) ) {
	/**
	 * Upsells
	 * Replace the default upsell function with our own which displays the correct number product columns
	 *
	 * @since   1.0.0
	 * @return  void
	 * @uses    woocommerce_upsell_display()
	 */
	function igoods_upsell_display() {
		$columns = apply_filters( 'igoods_upsells_columns', 3 );
		woocommerce_upsell_display( -1, $columns );
	}
}

if ( ! function_exists( 'igoods_sorting_wrapper' ) ) {
	/**
	 * Sorting wrapper
	 *
	 * @since   1.4.3
	 * @return  void
	 */
	function igoods_sorting_wrapper() {
		echo '<div class="igoods-sorting">';
	}
}

if ( ! function_exists( 'igoods_sorting_wrapper_close' ) ) {
	/**
	 * Sorting wrapper close
	 *
	 * @since   1.4.3
	 * @return  void
	 */
	function igoods_sorting_wrapper_close() {
		echo '</div>';
	}
}

if ( ! function_exists( 'igoods_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper
	 *
	 * @since   2.2.0
	 * @return  void
	 */
	function igoods_product_columns_wrapper() {
		$columns = igoods_loop_columns();
		echo '<div class="columns-' . absint( $columns ) . '">';
	}
}

if ( ! function_exists( 'igoods_loop_columns' ) ) {
	/**
	 * Default loop columns on product archives
	 *
	 * @return integer products per row
	 * @since  1.0.0
	 */
	function igoods_loop_columns() {
		$columns = 3; // 3 products per row

		if ( function_exists( 'wc_get_default_products_per_row' ) ) {
			$columns = wc_get_default_products_per_row();
		}

		return apply_filters( 'igoods_loop_columns', $columns );
	}
}

if ( ! function_exists( 'igoods_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close
	 *
	 * @since   2.2.0
	 * @return  void
	 */
	function igoods_product_columns_wrapper_close() {
		echo '</div>';
	}
}

if ( ! function_exists( 'igoods_shop_messages' ) ) {
	/**
	 * igoods shop messages
	 *
	 * @since   1.4.4
	 * @uses    igoods_do_shortcode
	 */
	function igoods_shop_messages() {
		if ( ! is_checkout() ) {
			echo wp_kses_post( igoods_do_shortcode( 'woocommerce_messages' ) );
		}
	}
}

if ( ! function_exists( 'igoods_woocommerce_pagination' ) ) {
	/**
	 * igoods WooCommerce Pagination
	 * WooCommerce disables the product pagination inside the woocommerce_product_subcategories() function
	 * but since igoods adds pagination before that function is excuted we need a separate function to
	 * determine whether or not to display the pagination.
	 *
	 * @since 1.4.4
	 */
	function igoods_woocommerce_pagination() {
		if ( woocommerce_products_will_display() ) {
			woocommerce_pagination();
		}
	}
}

if ( ! function_exists( 'igoods_product_categories' ) ) {
	/**
	 * Display Product Categories
	 * Hooked into the `homepage` action in the homepage template
	 *
	 * @since  1.0.0
	 * @param array $args the product section args.
	 * @return void
	 */
	function igoods_product_categories( $args ) {
		$args = apply_filters(
			'igoods_product_categories_args', array(
				'limit'            => 3,
				'columns'          => 3,
				'child_categories' => 0,
				'orderby'          => 'name',
				'title'            => __( 'Shop by Category', 'igoods' ),
			)
		);

		$shortcode_content = igoods_do_shortcode(
			'product_categories', apply_filters(
				'igoods_product_categories_shortcode_args', array(
					'number'  => intval( $args['limit'] ),
					'columns' => intval( $args['columns'] ),
					'orderby' => esc_attr( $args['orderby'] ),
					'parent'  => esc_attr( $args['child_categories'] ),
				)
			)
		);

		/**
		 * Only display the section if the shortcode returns product categories
		 */
		if ( false !== strpos( $shortcode_content, 'product-category' ) ) {
			echo '<section class="igoods-product-section igoods-product-categories" aria-label="' . esc_attr__( 'Product Categories', 'igoods' ) . '">';

			do_action( 'igoods_homepage_before_product_categories' );

			echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

			do_action( 'igoods_homepage_after_product_categories_title' );

			echo $shortcode_content; // WPCS: XSS ok.

			do_action( 'igoods_homepage_after_product_categories' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'igoods_recent_products' ) ) {
	/**
	 * Display Recent Products
	 * Hooked into the `homepage` action in the homepage template
	 *
	 * @since  1.0.0
	 * @param array $args the product section args.
	 * @return void
	 */
	function igoods_recent_products( $args ) {
		$args = apply_filters(
			'igoods_recent_products_args', array(
				'limit'   => 4,
				'columns' => 4,
				'orderby' => 'date',
				'order'   => 'desc',
				'title'   => __( 'New In', 'igoods' ),
			)
		);

		$shortcode_content = igoods_do_shortcode(
			'products', apply_filters(
				'igoods_recent_products_shortcode_args', array(
					'orderby'  => esc_attr( $args['orderby'] ),
					'order'    => esc_attr( $args['order'] ),
					'per_page' => intval( $args['limit'] ),
					'columns'  => intval( $args['columns'] ),
				)
			)
		);

		/**
		 * Only display the section if the shortcode returns products
		 */
		if ( false !== strpos( $shortcode_content, 'product' ) ) {
			echo '<section class="igoods-product-section igoods-recent-products" aria-label="' . esc_attr__( 'Recent Products', 'igoods' ) . '">';

			do_action( 'igoods_homepage_before_recent_products' );

			echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

			do_action( 'igoods_homepage_after_recent_products_title' );

			echo $shortcode_content; // WPCS: XSS ok.

			do_action( 'igoods_homepage_after_recent_products' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'igoods_featured_products' ) ) {
	/**
	 * Display Featured Products
	 * Hooked into the `homepage` action in the homepage template
	 *
	 * @since  1.0.0
	 * @param array $args the product section args.
	 * @return void
	 */
	function igoods_featured_products( $args ) {
		$args = apply_filters(
			'igoods_featured_products_args', array(
				'limit'      => 4,
				'columns'    => 4,
				'orderby'    => 'date',
				'order'      => 'desc',
				'visibility' => 'featured',
				'title'      => __( 'We Recommend', 'igoods' ),
			)
		);

		$shortcode_content = igoods_do_shortcode(
			'products', apply_filters(
				'igoods_featured_products_shortcode_args', array(
					'per_page'   => intval( $args['limit'] ),
					'columns'    => intval( $args['columns'] ),
					'orderby'    => esc_attr( $args['orderby'] ),
					'order'      => esc_attr( $args['order'] ),
					'visibility' => esc_attr( $args['visibility'] ),
				)
			)
		);

		/**
		 * Only display the section if the shortcode returns products
		 */
		if ( false !== strpos( $shortcode_content, 'product' ) ) {
			echo '<section class="igoods-product-section igoods-featured-products" aria-label="' . esc_attr__( 'Featured Products', 'igoods' ) . '">';

			do_action( 'igoods_homepage_before_featured_products' );

			echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

			do_action( 'igoods_homepage_after_featured_products_title' );

			echo $shortcode_content; // WPCS: XSS ok.

			do_action( 'igoods_homepage_after_featured_products' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'igoods_popular_products' ) ) {
	/**
	 * Display Popular Products
	 * Hooked into the `homepage` action in the homepage template
	 *
	 * @since  1.0.0
	 * @param array $args the product section args.
	 * @return void
	 */
	function igoods_popular_products( $args ) {
		$args = apply_filters(
			'igoods_popular_products_args', array(
				'limit'   => 4,
				'columns' => 4,
				'orderby' => 'rating',
				'order'   => 'desc',
				'title'   => __( 'Fan Favorites', 'igoods' ),
			)
		);

		$shortcode_content = igoods_do_shortcode(
			'products', apply_filters(
				'igoods_popular_products_shortcode_args', array(
					'per_page' => intval( $args['limit'] ),
					'columns'  => intval( $args['columns'] ),
					'orderby'  => esc_attr( $args['orderby'] ),
					'order'    => esc_attr( $args['order'] ),
				)
			)
		);

		/**
		 * Only display the section if the shortcode returns products
		 */
		if ( false !== strpos( $shortcode_content, 'product' ) ) {
			echo '<section class="igoods-product-section igoods-popular-products" aria-label="' . esc_attr__( 'Popular Products', 'igoods' ) . '">';

			do_action( 'igoods_homepage_before_popular_products' );

			echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

			do_action( 'igoods_homepage_after_popular_products_title' );

			echo $shortcode_content; // WPCS: XSS ok.

			do_action( 'igoods_homepage_after_popular_products' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'igoods_on_sale_products' ) ) {
	/**
	 * Display On Sale Products
	 * Hooked into the `homepage` action in the homepage template
	 *
	 * @param array $args the product section args.
	 * @since  1.0.0
	 * @return void
	 */
	function igoods_on_sale_products( $args ) {
		$args = apply_filters(
			'igoods_on_sale_products_args', array(
				'limit'   => 4,
				'columns' => 4,
				'orderby' => 'date',
				'order'   => 'desc',
				'on_sale' => 'true',
				'title'   => __( 'On Sale', 'igoods' ),
			)
		);

		$shortcode_content = igoods_do_shortcode(
			'products', apply_filters(
				'igoods_on_sale_products_shortcode_args', array(
					'per_page' => intval( $args['limit'] ),
					'columns'  => intval( $args['columns'] ),
					'orderby'  => esc_attr( $args['orderby'] ),
					'order'    => esc_attr( $args['order'] ),
					'on_sale'  => esc_attr( $args['on_sale'] ),
				)
			)
		);

		/**
		 * Only display the section if the shortcode returns products
		 */
		if ( false !== strpos( $shortcode_content, 'product' ) ) {
			echo '<section class="igoods-product-section igoods-on-sale-products" aria-label="' . esc_attr__( 'On Sale Products', 'igoods' ) . '">';

			do_action( 'igoods_homepage_before_on_sale_products' );

			echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

			do_action( 'igoods_homepage_after_on_sale_products_title' );

			echo $shortcode_content; // WPCS: XSS ok.

			do_action( 'igoods_homepage_after_on_sale_products' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'igoods_best_selling_products' ) ) {
	/**
	 * Display Best Selling Products
	 * Hooked into the `homepage` action in the homepage template
	 *
	 * @since 2.0.0
	 * @param array $args the product section args.
	 * @return void
	 */
	function igoods_best_selling_products( $args ) {
		$args = apply_filters(
			'igoods_best_selling_products_args', array(
				'limit'   => 4,
				'columns' => 4,
				'orderby' => 'popularity',
				'order'   => 'desc',
				'title'   => esc_attr__( 'Best Sellers', 'igoods' ),
			)
		);

		$shortcode_content = igoods_do_shortcode(
			'products', apply_filters(
				'igoods_best_selling_products_shortcode_args', array(
					'per_page' => intval( $args['limit'] ),
					'columns'  => intval( $args['columns'] ),
					'orderby'  => esc_attr( $args['orderby'] ),
					'order'    => esc_attr( $args['order'] ),
				)
			)
		);

		/**
		 * Only display the section if the shortcode returns products
		 */
		if ( false !== strpos( $shortcode_content, 'product' ) ) {
			echo '<section class="igoods-product-section igoods-best-selling-products" aria-label="' . esc_attr__( 'Best Selling Products', 'igoods' ) . '">';

			do_action( 'igoods_homepage_before_best_selling_products' );

			echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

			do_action( 'igoods_homepage_after_best_selling_products_title' );

			echo $shortcode_content; // WPCS: XSS ok.

			do_action( 'igoods_homepage_after_best_selling_products' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'igoods_promoted_products' ) ) {
	/**
	 * Featured and On-Sale Products
	 * Check for featured products then on-sale products and use the appropiate shortcode.
	 * If neither exist, it can fallback to show recently added products.
	 *
	 * @since  1.5.1
	 * @param integer $per_page total products to display.
	 * @param integer $columns columns to arrange products in to.
	 * @param boolean $recent_fallback Should the function display recent products as a fallback when there are no featured or on-sale products?.
	 * @uses  igoods_is_woocommerce_activated()
	 * @uses  wc_get_featured_product_ids()
	 * @uses  wc_get_product_ids_on_sale()
	 * @uses  igoods_do_shortcode()
	 * @return void
	 */
	function igoods_promoted_products( $per_page = '2', $columns = '2', $recent_fallback = true ) {
		if ( igoods_is_woocommerce_activated() ) {

			if ( wc_get_featured_product_ids() ) {

				echo '<h2>' . esc_html__( 'Featured Products', 'igoods' ) . '</h2>';

				echo igoods_do_shortcode(
					'featured_products', array(
						'per_page' => $per_page,
						'columns'  => $columns,
					)
				); // WPCS: XSS ok.
			} elseif ( wc_get_product_ids_on_sale() ) {

				echo '<h2>' . esc_html__( 'On Sale Now', 'igoods' ) . '</h2>';

				echo igoods_do_shortcode(
					'sale_products', array(
						'per_page' => $per_page,
						'columns'  => $columns,
					)
				); // WPCS: XSS ok.
			} elseif ( $recent_fallback ) {

				echo '<h2>' . esc_html__( 'New In Store', 'igoods' ) . '</h2>';

				echo igoods_do_shortcode(
					'recent_products', array(
						'per_page' => $per_page,
						'columns'  => $columns,
					)
				); // WPCS: XSS ok.
			}
		}
	}
}

if ( ! function_exists( 'igoods_handheld_footer_bar' ) ) {
	/**
	 * Display a menu intended for use on handheld devices
	 *
	 * @since 2.0.0
	 */
	function igoods_handheld_footer_bar() {
		$links = array(
			'my-account' => array(
				'priority' => 10,
				'callback' => 'igoods_handheld_footer_bar_account_link',
			),
			'search'     => array(
				'priority' => 20,
				'callback' => 'igoods_handheld_footer_bar_search',
			),
			'cart'       => array(
				'priority' => 30,
				'callback' => 'igoods_handheld_footer_bar_cart_link',
			),
		);

		if ( wc_get_page_id( 'myaccount' ) === -1 ) {
			unset( $links['my-account'] );
		}

		if ( wc_get_page_id( 'cart' ) === -1 ) {
			unset( $links['cart'] );
		}

		$links = apply_filters( 'igoods_handheld_footer_bar_links', $links );
		?>
		<div class="igoods-handheld-footer-bar">
			<ul class="columns-<?php echo count( $links ); ?>">
				<?php foreach ( $links as $key => $link ) : ?>
					<li class="<?php echo esc_attr( $key ); ?>">
						<?php
						if ( $link['callback'] ) {
							call_user_func( $link['callback'], $key, $link );
						}
						?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php
	}
}

if ( ! function_exists( 'igoods_handheld_footer_bar_search' ) ) {
	/**
	 * The search callback function for the handheld footer bar
	 *
	 * @since 2.0.0
	 */
	function igoods_handheld_footer_bar_search() {
		echo '<a href="">' . esc_attr__( 'Search', 'igoods' ) . '</a>';
		igoods_product_search();
	}
}

if ( ! function_exists( 'igoods_handheld_footer_bar_cart_link' ) ) {
	/**
	 * The cart callback function for the handheld footer bar
	 *
	 * @since 2.0.0
	 */
	function igoods_handheld_footer_bar_cart_link() {
		?>
			<a class="footer-cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'igoods' ); ?>">
				<span class="count"><?php echo wp_kses_data( WC()->cart->get_cart_contents_count() ); ?></span>
			</a>
		<?php
	}
}

if ( ! function_exists( 'igoods_handheld_footer_bar_account_link' ) ) {
	/**
	 * The account callback function for the handheld footer bar
	 *
	 * @since 2.0.0
	 */
	function igoods_handheld_footer_bar_account_link() {
		echo '<a href="' . esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) . '">' . esc_attr__( 'My Account', 'igoods' ) . '</a>';
	}
}

if ( ! function_exists( 'igoods_single_product_pagination' ) ) {
	/**
	 * Single Product Pagination
	 *
	 * @since 2.3.0
	 */
	function igoods_single_product_pagination() {
		if ( class_exists( 'igoods_Product_Pagination' ) || true !== get_theme_mod( 'igoods_product_pagination' ) ) {
			return;
		}

		// Show only products in the same category?
		$in_same_term   = apply_filters( 'igoods_single_product_pagination_same_category', true );
		$excluded_terms = apply_filters( 'igoods_single_product_pagination_excluded_terms', '' );
		$taxonomy       = apply_filters( 'igoods_single_product_pagination_taxonomy', 'product_cat' );

		$previous_product = igoods_get_previous_product( $in_same_term, $excluded_terms, $taxonomy );
		$next_product     = igoods_get_next_product( $in_same_term, $excluded_terms, $taxonomy );

		if ( ! $previous_product && ! $next_product ) {
			return;
		}

		?>
		<nav class="igoods-product-pagination" aria-label="<?php esc_attr_e( 'More products', 'igoods' ); ?>">
			<?php if ( $previous_product ) : ?>
				<a href="<?php echo esc_url( $previous_product->get_permalink() ); ?>" rel="prev">
					<?php echo wp_kses_post( $previous_product->get_image() ); ?>
					<span class="igoods-product-pagination__title"><?php echo wp_kses_post( $previous_product->get_name() ); ?></span>
				</a>
			<?php endif; ?>

			<?php if ( $next_product ) : ?>
				<a href="<?php echo esc_url( $next_product->get_permalink() ); ?>" rel="next">
					<?php echo wp_kses_post( $next_product->get_image() ); ?>
					<span class="igoods-product-pagination__title"><?php echo wp_kses_post( $next_product->get_name() ); ?></span>
				</a>
			<?php endif; ?>
		</nav><!-- .igoods-product-pagination -->
		<?php
	}
}

if ( ! function_exists( 'igoods_sticky_single_add_to_cart' ) ) {
	/**
	 * Sticky Add to Cart
	 *
	 * @since 2.3.0
	 */
	function igoods_sticky_single_add_to_cart() {
		global $product;

		if ( class_exists( 'igoods_Sticky_Add_to_Cart' ) || true !== get_theme_mod( 'igoods_sticky_add_to_cart' ) ) {
			return;
		}

		if ( ! is_product() ) {
			return;
		}

		$params = apply_filters(
			'igoods_sticky_add_to_cart_params', array(
				'trigger_class' => 'entry-summary',
			)
		);

		wp_localize_script( 'igoods-sticky-add-to-cart', 'igoods_sticky_add_to_cart_params', $params );

		wp_enqueue_script( 'igoods-sticky-add-to-cart' );
		?>
			<section class="igoods-sticky-add-to-cart">
				<div class="col-full">
					<div class="igoods-sticky-add-to-cart__content">
						<?php echo wp_kses_post( woocommerce_get_product_thumbnail() ); ?>
						<div class="igoods-sticky-add-to-cart__content-product-info">
							<span class="igoods-sticky-add-to-cart__content-title"><?php esc_attr_e( 'You\'re viewing:', 'igoods' ); ?> <strong><?php the_title(); ?></strong></span>
							<span class="igoods-sticky-add-to-cart__content-price"><?php echo wp_kses_post( $product->get_price_html() ); ?></span>
							<?php echo wp_kses_post( wc_get_rating_html( $product->get_average_rating() ) ); ?>
						</div>
						<a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="igoods-sticky-add-to-cart__content-button button alt">
							<?php echo esc_attr( $product->add_to_cart_text() ); ?>
						</a>
					</div>
				</div>
			</section><!-- .igoods-sticky-add-to-cart -->
		<?php
	}
}

if ( ! function_exists( 'igoods_woocommerce_brands_homepage_section' ) ) {
	/**
	 * Display WooCommerce Brands
	 * Hooked into the `homepage` action in the homepage template.
	 * Requires WooCommerce Brands.
	 *
	 * @since  2.3.0
	 * @link   https://woocommerce.com/products/brands/
	 * @uses   apply_filters()
	 * @uses   igoods_do_shortcode()
	 * @uses   wp_kses_post()
	 * @uses   do_action()
	 * @return void
	 */
	function igoods_woocommerce_brands_homepage_section() {
		$args = apply_filters(
			'igoods_woocommerce_brands_args', array(
				'number'     => 6,
				'columns'    => 4,
				'orderby'    => 'name',
				'show_empty' => false,
				'title'      => __( 'Shop by Brand', 'igoods' ),
			)
		);

		$shortcode_content = igoods_do_shortcode(
			'product_brand_thumbnails', apply_filters(
				'igoods_woocommerce_brands_shortcode_args', array(
					'number'     => absint( $args['number'] ),
					'columns'    => absint( $args['columns'] ),
					'orderby'    => esc_attr( $args['orderby'] ),
					'show_empty' => (bool) $args['show_empty'],
				)
			)
		);

		echo '<section class="igoods-product-section igoods-woocommerce-brands" aria-label="' . esc_attr__( 'Product Brands', 'igoods' ) . '">';

		do_action( 'igoods_homepage_before_woocommerce_brands' );

		echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

		do_action( 'igoods_homepage_after_woocommerce_brands_title' );

		echo $shortcode_content; // WPCS: XSS ok.

		do_action( 'igoods_homepage_after_woocommerce_brands' );

		echo '</section>';
	}
}

if ( ! function_exists( 'igoods_woocommerce_brands_archive' ) ) {
	/**
	 * Display brand image on brand archives
	 * Requires WooCommerce Brands.
	 *
	 * @since  2.3.0
	 * @link   https://woocommerce.com/products/brands/
	 * @uses   is_tax()
	 * @uses   wp_kses_post()
	 * @uses   get_brand_thumbnail_image()
	 * @uses   get_queried_object()
	 * @return void
	 */
	function igoods_woocommerce_brands_archive() {
		if ( is_tax( 'product_brand' ) ) {
			echo wp_kses_post( get_brand_thumbnail_image( get_queried_object() ) );
		}
	}
}

if ( ! function_exists( 'igoods_woocommerce_brands_single' ) ) {
	/**
	 * Output product brand image for use on single product pages
	 * Requires WooCommerce Brands.
	 *
	 * @since  2.3.0
	 * @link   https://woocommerce.com/products/brands/
	 * @uses   igoods_do_shortcode()
	 * @uses   wp_kses_post()
	 * @return void
	 */
	function igoods_woocommerce_brands_single() {
		$brand = igoods_do_shortcode(
			'product_brand', array(
				'class' => '',
			)
		);

		if ( empty( $brand ) ) {
			return;
		}

		?>
		<div class="igoods-wc-brands-single-product">
			<?php echo wp_kses_post( $brand ); ?>
		</div>
		<?php
	}
}
