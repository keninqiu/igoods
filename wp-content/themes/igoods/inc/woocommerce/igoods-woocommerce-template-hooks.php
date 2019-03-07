<?php
/**
 * igoods WooCommerce hooks
 *
 * @package igoods
 */

/**
 * Homepage
 *
 * @see  igoods_product_categories()
 * @see  igoods_recent_products()
 * @see  igoods_featured_products()
 * @see  igoods_popular_products()
 * @see  igoods_on_sale_products()
 * @see  igoods_best_selling_products()
 */
add_action( 'homepage', 'igoods_product_categories', 20 );
add_action( 'homepage-igoods', 'igoods_recent_products', 30 );
add_action( 'homepage-igoods', 'igoods_featured_products', 40 );
add_action( 'homepage-igoods', 'igoods_popular_products', 50 );
add_action( 'homepage-igoods', 'igoods_on_sale_products', 60 );
add_action( 'homepage-igoods', 'igoods_best_selling_products', 70 );

/**
 * Layout
 *
 * @see  igoods_before_content()
 * @see  igoods_after_content()
 * @see  woocommerce_breadcrumb()
 * @see  igoods_shop_messages()
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
add_action( 'woocommerce_before_main_content', 'igoods_before_content', 10 );
add_action( 'woocommerce_after_main_content', 'igoods_after_content', 10 );
add_action( 'igoods_content_top', 'igoods_shop_messages', 15 );
add_action( 'igoods_before_content', 'woocommerce_breadcrumb', 10 );

add_action( 'woocommerce_after_shop_loop', 'igoods_sorting_wrapper', 9 );
add_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10 );
add_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 20 );
add_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 30 );
add_action( 'woocommerce_after_shop_loop', 'igoods_sorting_wrapper_close', 31 );

add_action( 'woocommerce_before_shop_loop', 'igoods_sorting_wrapper', 9 );
add_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 );
add_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
add_action( 'woocommerce_before_shop_loop', 'igoods_woocommerce_pagination', 30 );
add_action( 'woocommerce_before_shop_loop', 'igoods_sorting_wrapper_close', 31 );

add_action( 'igoods_footer', 'igoods_handheld_footer_bar', 999 );

// Legacy WooCommerce columns filter.
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.3', '<' ) ) {
	add_filter( 'loop_shop_columns', 'igoods_loop_columns' );
	add_action( 'woocommerce_before_shop_loop', 'igoods_product_columns_wrapper', 40 );
	add_action( 'woocommerce_after_shop_loop', 'igoods_product_columns_wrapper_close', 40 );
}

/**
 * Products
 *
 * @see igoods_upsell_display()
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action( 'woocommerce_after_single_product_summary', 'igoods_upsell_display', 15 );

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 6 );

add_action( 'woocommerce_after_single_product_summary', 'igoods_single_product_pagination', 30 );
add_action( 'igoods_after_footer', 'igoods_sticky_single_add_to_cart', 999 );

/**
 * Header
 *
 * @see igoods_product_search()
 * @see igoods_header_cart()
 */
add_action( 'igoods_header', 'igoods_product_search', 40 );
add_action( 'igoods_header', 'igoods_header_cart', 60 );

/**
 * Cart fragment
 *
 * @see igoods_cart_link_fragment()
 */
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.3', '>=' ) ) {
	add_filter( 'woocommerce_add_to_cart_fragments', 'igoods_cart_link_fragment' );
} else {
	add_filter( 'add_to_cart_fragments', 'igoods_cart_link_fragment' );
}

/**
 * Integrations
 *
 * @see igoods_woocommerce_brands_archive()
 * @see igoods_woocommerce_brands_single()
 * @see igoods_woocommerce_brands_homepage_section()
 */
if ( class_exists( 'WC_Brands' ) ) {
	add_action( 'woocommerce_archive_description', 'igoods_woocommerce_brands_archive', 5 );
	add_action( 'woocommerce_single_product_summary', 'igoods_woocommerce_brands_single', 4 );
	add_action( 'homepage', 'igoods_woocommerce_brands_homepage_section', 80 );
}
