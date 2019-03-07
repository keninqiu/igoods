<?php
/**
 * igoods hooks
 *
 * @package igoods
 */

/**
 * General
 *
 * @see  igoods_header_widget_region()
 * @see  igoods_get_sidebar()
 */
add_action( 'igoods_before_content', 'igoods_header_widget_region', 10 );
add_action( 'igoods_sidebar', 'igoods_get_sidebar', 10 );

/**
 * Header
 *
 * @see  igoods_skip_links()
 * @see  igoods_secondary_navigation()
 * @see  igoods_site_branding()
 * @see  igoods_primary_navigation()
 */
add_action( 'igoods_header', 'igoods_header_container', 0 );
add_action( 'igoods_header', 'igoods_skip_links', 5 );
add_action( 'igoods_header', 'igoods_site_branding', 20 );
add_action( 'igoods_header', 'igoods_secondary_navigation', 30 );
add_action( 'igoods_header', 'igoods_header_container_close', 41 );
add_action( 'igoods_header', 'igoods_primary_navigation_wrapper', 42 );
add_action( 'igoods_header', 'igoods_primary_navigation', 50 );
add_action( 'igoods_header', 'igoods_primary_navigation_wrapper_close', 68 );

/**
 * Footer
 *
 * @see  igoods_footer_widgets()
 * @see  igoods_credit()
 */
//add_action( 'igoods_footer', 'igoods_footer_widgets', 10 );
//add_action( 'igoods_footer', 'igoods_credit', 20 );

/**
 * Homepage
 *
 * @see  igoods_homepage_content()
 */
//add_action( 'homepage-igoods', 'igoods_homepage_content', 10 );

/**
 * Posts
 *
 * @see  igoods_post_header()
 * @see  igoods_post_meta()
 * @see  igoods_post_content()
 * @see  igoods_paging_nav()
 * @see  igoods_single_post_header()
 * @see  igoods_post_nav()
 * @see  igoods_display_comments()
 */
add_action( 'igoods_loop_post', 'igoods_post_header', 10 );
add_action( 'igoods_loop_post', 'igoods_post_content', 30 );
add_action( 'igoods_loop_post', 'igoods_post_taxonomy', 40 );
add_action( 'igoods_loop_after', 'igoods_paging_nav', 10 );
add_action( 'igoods_single_post', 'igoods_post_header', 10 );
add_action( 'igoods_single_post', 'igoods_post_content', 30 );
add_action( 'igoods_single_post_bottom', 'igoods_post_taxonomy', 5 );
add_action( 'igoods_single_post_bottom', 'igoods_post_nav', 10 );
add_action( 'igoods_single_post_bottom', 'igoods_display_comments', 20 );
add_action( 'igoods_post_header_before', 'igoods_post_meta', 10 );
add_action( 'igoods_post_content_before', 'igoods_post_thumbnail', 10 );

/**
 * Pages
 *
 * @see  igoods_page_header()
 * @see  igoods_page_content()
 * @see  igoods_display_comments()
 */
add_action( 'igoods_page', 'igoods_page_header', 10 );
add_action( 'igoods_page', 'igoods_page_content', 20 );
add_action( 'igoods_page_after', 'igoods_display_comments', 10 );

/**
 * Homepage Page Template
 *
 * @see  igoods_homepage_header()
 * @see  igoods_page_content()
 */
add_action( 'igoods_homepage', 'igoods_homepage_header', 10 );
add_action( 'igoods_homepage', 'igoods_page_content', 20 );
